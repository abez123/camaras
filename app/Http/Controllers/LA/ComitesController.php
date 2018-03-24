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

use App\Models\Comite;
use App\Models\Contacto;
use App\Models\Organization;

class ComitesController extends Controller
{
	public $show_action = true;
	public $view_col = 'nombre';
	public $listing_cols = ['id', 'nombre', 'descripcion', 'objetivos', 'temas', 'fechassesion', 'presidente', 'vicepresidente', 'coordinador', 'miembros', 'activo'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Comites', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Comites', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Comites.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Comites');
		$miembros = Contacto::join('organizations','organizations.id','=','contactos.empresa')->whereNull('contactos.deleted_at')->select(array('contactos.id','contactos.nombre','organizations.name'))->get();
		$miembro = '';
		if(Module::hasAccess($module->id)) {
			return View('la.comites.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module,
				'miembros' => $miembros,
				'miembro' => $miembro
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new comite.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created comite in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Comites", "create")) {
		
			$rules = Module::validateRules("Comites", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Comites", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.comites.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified comite.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Comites", "view")) {
			
			$comite = Comite::find($id);
			if(isset($comite->id)) {
				$module = Module::get('Comites');
				$module->row = $comite;
				
				return view('la.comites.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('comite', $comite);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("comite"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified comite.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Comites", "edit")) {			
			$comite = Comite::find($id);
			$miembros = Contacto::join('organizations','organizations.id','=','contactos.empresa')->select(array('contactos.id','contactos.nombre','organizations.name'))->whereNull('contactos.deleted_at')->get();
		     $miembro = $comite->miembros;
			if(isset($comite->id)) {	
				$module = Module::get('Comites');
				
				$module->row = $comite;
				
				return view('la.comites.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('comite', $comite)->with('miembros', $miembros)->with('miembro', $miembro);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("comite"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified comite in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Comites", "edit")) {
			
			$rules = Module::validateRules("Comites", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Comites", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.comites.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified comite from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Comites", "delete")) {
			Comite::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.comites.index');
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
		$values = DB::table('comites')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Comites');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/comites/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Comites", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/comites/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Comites", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.comites.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
