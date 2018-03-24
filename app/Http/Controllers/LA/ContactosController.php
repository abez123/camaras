<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use Dwij\Laraadmin\Models\LAConfigs;
use Dwij\Laraadmin\Helpers\LAHelper;
use App\Models\Contacto;
use App\User;
use App\Role;
use Mail;
use Log;


class ContactosController extends Controller
{
	public $show_action = true;
	public $view_col = 'nombre';
	public $listing_cols = ['id', 'nombre', 'tel', 'extension', 'cel', 'whatsapp', 'correo', 'empresa', 'puesto'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Contactos', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Contactos', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Contactos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Contactos');
		
		if(Module::hasAccess($module->id)) {
			return View('la.contactos.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new contacto.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created contacto in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Contactos", "create")) {
		
			$rules = Module::validateRules("Contactos", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Contactos", $request);
			$whatsapp = Contacto::find($insert_id);
			if($request->whats == 1){
				$whatsapp->whatsapp=$request->cel;
				$whatsapp->save();
			}else{
				$whatsapp->whatsapp=$request->whatsapp;
				$whatsapp->save();
			}
			// generate password
			$password = LAHelper::gen_password();
				// Create User
			$user = User::create([
				'name' => $request->nombre,
				'email' => $request->correo,
				'password' => bcrypt($password),
				'context_id' => $insert_id,
				'type' => "SOCIO",
			]);
	
			// update user role
			$user->detachRoles();
			$role = Role::find($request->role);
			$user->attachRole($role);
			
			if(env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
				// Send mail to User his Password
				Mail::send('emails.send_login_cred', ['user' => $user, 'password' => $password], function ($m) use ($user) {
					$m->from('info@amcham.org.mx', 'AMCHAM');
					$m->to($user->email, $user->name)->subject('AMCHAM - Your Login Credentials');
				});
			} else {
				Log::info("User created: username: ".$user->email." Password: ".$password);
			}
			
			return redirect()->route(config('laraadmin.adminRoute') . '.contactos.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified contacto.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Contactos", "view")) {
			
			$contacto = Contacto::find($id);
			if(isset($contacto->id)) {
				$module = Module::get('Contactos');
				$module->row = $contacto;
				
				return view('la.contactos.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('contacto', $contacto);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("contacto"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified contacto.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Contactos", "edit")) {			
			$contacto = Contacto::find($id);
			if(isset($contacto->id)) {	
				$module = Module::get('Contactos');
				
				$module->row = $contacto;
				
				return view('la.contactos.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('contacto', $contacto);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("contacto"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified contacto in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Contactos", "edit")) {
			
			$rules = Module::validateRules("Contactos", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Contactos", $request, $id);
		// Update User
			$user = User::where('context_id', $insert_id)->where('type','SOCIO')->first();
			$user->name = $request->nombre;
			$user->email = $request->correo;
			$user->save();
			
			// update user role
			$user->detachRoles();
			$role = Role::find($request->role);
			$user->attachRole($role);
			return redirect()->route(config('laraadmin.adminRoute') . '.contactos.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified contacto from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Contactos", "delete")) {
			Contacto::find($id)->delete();
			$userid = User::where('context_id',$id)->where('type','SOCIO')->value('id');
			$user = User::find($userid);
			$user->delete();
			$user->detachRoles();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.contactos.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('contactos')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Contactos');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/contactos/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Contactos", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/contactos/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Contactos", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.contactos.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}
}
