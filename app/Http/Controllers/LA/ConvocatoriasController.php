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

use App\Models\Convocatoria;
use App\Models\Contacto;
use App\Models\Comite;
use App\Models\Organization;
use App\Models\Employee;
use App\Models\Upload;
use Mail;
class ConvocatoriasController extends Controller
{
	public $show_action = true;
	public $view_col = 'tituloconvactoria';
	public $listing_cols = ['id', 'comite_id', 'tituloconvactoria',  'horario', 'sedenombre', 'sededomicilio', 'preciosocio', 'precionosocio', 'temario', 'temarioimagen', 'expositor', 'archivos', 'logoexpositor', 'comentarios'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Convocatorias', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Convocatorias', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Convocatorias.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Convocatorias');
		
		if(Module::hasAccess($module->id)) {
			return View('la.convocatorias.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new convocatoria.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created convocatoria in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Convocatorias", "create")) {
		
			$rules = Module::validateRules("Convocatorias", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Convocatorias", $request);

			$comites = Comite::find($request->comite_id);
			$comitescorreos = Comite::where('id',$request->comite_id)->select(array('comites.miembros'))->get();
            foreach($comitescorreos as $com){
            $proper1 = $com->miembros;
    		}
             
            
        $prop2 = str_replace('"', ' ', $proper1);
                     
		$uploads = json_decode($prop2);
			$imgs = Upload::find($request->temarioimagen);
			
			$logoexp = Upload::find($request->logoexpositor);
			
			$correos = Contacto::whereIN('id',$uploads)->pluck('correo');
            $miembro = Contacto::whereIN('id',$uploads)->pluck('id');
			$coordinador = Employee::where('id',$comites->coordinador)->value('email');
			$presidente = Employee::where('id',$comites->presidente)->value('email');
			$vice = Employee::where('id',$comites->vicepresidente)->value('email');
			$comite = $comites->nombre;
			/* Send mail to User his Password          

			      $users = [];
                  $users = User::whereAdmin('padre')->lists('users.email')->all();

      
                   foreach($users as $user){

                         Mail::queue('emails.padres', array(
                            'name' => $news->introduction,
                            'tipo' =>'Noticias',
                            'user_message' => $news->content
                        ), function($message) use ($user)
                    {
                       $message->from('direccion@linguasit.com');
                       $message->to($user)->subject('Nueva Nota Colegio Madrid');
                       $message->replyTo('direccion@linguasit.com', 'Colegio Madrid');
                      
                    });
            }*/
             foreach($correos as $correo){
				Mail::queue('emails.convocatoria', array(
					        'convocatoria_id' => $insert_id,
					       
						    'comitename' => $comite,
                            'name' => $request->tituloconvactoria,
                            'horario' => $request->horario,
                            'sedenombre' => $request->sedenombre,
                            'sededomicilio' => $request->sededomicilio,
                            'preciosocio' => $request->preciosocio,
                            'precionosocio' => $request->precionosocio,
                            'temario' => $request->temario,
						    'temarioimagen' => $imgs,
						    'expositor' => $request->expositor,
						    'logoexpositor' => $logoexp,
						    'comentarios' => $request->comentarios
                        ), function($message) use ($correo,$coordinador,$comite)
                    {
                       $message->from($coordinador);
                       $message->to($correo)->subject('Convocatoria del comité'.' '.$comite);
                       $message->replyTo($coordinador, 'Amcham Comité'.' '.$comite);
                      
                    });
			}
			return redirect()->route(config('laraadmin.adminRoute') . '.convocatorias.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified convocatoria.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Convocatorias", "view")) {
			
			$convocatoria = Convocatoria::find($id);
			if(isset($convocatoria->id)) {
				$module = Module::get('Convocatorias');
				$module->row = $convocatoria;
				
				return view('la.convocatorias.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('convocatoria', $convocatoria);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("convocatoria"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified convocatoria.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Convocatorias", "edit")) {			
			$convocatoria = Convocatoria::find($id);
			if(isset($convocatoria->id)) {	
				$module = Module::get('Convocatorias');
				
				$module->row = $convocatoria;
				
				return view('la.convocatorias.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('convocatoria', $convocatoria);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("convocatoria"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified convocatoria in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Convocatorias", "edit")) {
			
			$rules = Module::validateRules("Convocatorias", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Convocatorias", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.convocatorias.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified convocatoria from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Convocatorias", "delete")) {
			Convocatoria::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.convocatorias.index');
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
		$values = DB::table('convocatorias')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Convocatorias');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/convocatorias/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Convocatorias", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/convocatorias/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Convocatorias", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.convocatorias.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
