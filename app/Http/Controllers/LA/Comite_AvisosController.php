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

use App\Models\Comite_Aviso;

class Comite_AvisosController extends Controller
{
	public $show_action = true;
	public $view_col = 'comite';
	public $listing_cols = ['id', 'comite', 'tipo', 'titulo', 'aviso', 'minuta', 'archivos', 'video', 'seguimimiento', 'escritopor'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Comite_Avisos', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Comite_Avisos', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Comite_Avisos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Comite_Avisos');
		
		if(Module::hasAccess($module->id)) {
			return View('la.comite_avisos.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}
	

	/**
	 * Show the form for creating a new comite_aviso.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created comite_aviso in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Comite_Avisos", "create")) {
		
			$rules = Module::validateRules("Comite_Avisos", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Comite_Avisos", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.comite_avisos.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified comite_aviso.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Comite_Avisos", "view")) {
			
			$comite_aviso = Comite_Aviso::find($id);
			if(isset($comite_aviso->id)) {
				$module = Module::get('Comite_Avisos');
				$module->row = $comite_aviso;
				
				return view('la.comite_avisos.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('comite_aviso', $comite_aviso);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("comite_aviso"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Show the form for editing the specified comite_aviso.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Comite_Avisos", "edit")) {			
			$comite_aviso = Comite_Aviso::find($id);
			if(isset($comite_aviso->id)) {	
				$module = Module::get('Comite_Avisos');
				
				$module->row = $comite_aviso;
				
				return view('la.comite_avisos.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('comite_aviso', $comite_aviso);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("comite_aviso"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified comite_aviso in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Comite_Avisos", "edit")) {
			
			$rules = Module::validateRules("Comite_Avisos", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Comite_Avisos", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.comite_avisos.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified comite_aviso from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Comite_Avisos", "delete")) {
			Comite_Aviso::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.comite_avisos.index');
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
		$values = DB::table('comite_avisos')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Comite_Avisos');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/comite_avisos/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Comite_Avisos", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/comite_avisos/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Comite_Avisos", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.comite_avisos.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
