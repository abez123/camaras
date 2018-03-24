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
use Illuminate\Support\Facades\Input;
use App\Models\Asistencia;
use App\Models\Convocatoria;
use App\Models\Contacto;
use App\Models\Comite;
use App\Models\Organization;
use App\Models\Employee;
use App\Models\Upload;
use Mail;
use Carbon\Carbon;
class AsistenciasController extends Controller
{
	public $show_action = true;
	public $view_col = 'convocatoria_id';
	public $listing_cols = ['id', 'convocatoria_id', 'miembro_id', 'estatus', 'asistencia'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Asistencias', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Asistencias', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Asistencias.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Asistencias');
		
		if(Module::hasAccess($module->id)) {
			return View('la.asistencias.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new asistencia.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create_from_email($id)
	{
		
		$convocatoria_id=$id;
		
		return View('la.asistencias.from_email',compact('convocatoria_id'));
		
	}

	
/**
	 * Display a listing of the Asistencias.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}
	/**
	 * Store a newly created asistencia in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Asistencias", "create")) {
		
			$rules = Module::validateRules("Asistencias", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Asistencias", $request);
			$comites = Comite::join('convocatorias','convocatorias.comite_id','=','comites.id')->where('convocatorias.id',$request->convocatoria_id)->select(array('comites.*'))->get();
			$convocatoria= Convocatoria::find($request->convocatoria_id);
			$correo = Contacto::where('id',$request->miembro_id)->value('correo');
			$miembroname = Contacto::where('id',$request->miembro_id)->value('nombre');
            $miembro = $request->miembro_id;
            foreach($comites as $com){
            $coordinador = Employee::where('id',$com->coordinador)->value('email');
			$presidente = Employee::where('id',$com->presidente)->value('email');
			$vice = Employee::where('id',$com->vicepresidente)->value('email');
			$comite = $com->nombre;	
			}
	       $imgs = Upload::find($convocatoria->temarioimagen);
			
		   $logoexp = Upload::find($convocatoria->logoexpositor);
           
				Mail::queue('emails.confirmacion_asistencia', array(
					        'asistencia_id' => $insert_id,
					        'comitename' => $comite,
					        'miembroname' => $miembroname,
                            'name' => $convocatoria->tituloconvactoria,
                            'horario' => $convocatoria->horario,
                            'sedenombre' => $convocatoria->sedenombre,
                            'sededomicilio' => $convocatoria->sededomicilio,
                            'preciosocio' => $convocatoria->preciosocio,
                            'precionosocio' => $convocatoria->precionosocio,
                            'temario' => $convocatoria->temario,
						    'temarioimagen' => $imgs,
						    'expositor' => $convocatoria->expositor,
						    'logoexpositor' => $logoexp,
						    'comentarios' => $convocatoria->comentarios
                        ), function($message) use ($correo,$coordinador,$comite)
                    {
                       $message->from($coordinador);
                       $message->to($correo)->subject('Confirmación de Asistencia del comité'.' '.$comite);
                       $message->replyTo($coordinador, 'Amcham Comité'.' '.$comite);
                      
                    });
		
			
			return redirect()->route(config('laraadmin.adminRoute') . '.asistencias.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified asistencia.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Asistencias", "view")) {
			
			$asistencia = Asistencia::find($id);
			if(isset($asistencia->id)) {
				$module = Module::get('Asistencias');
				$module->row = $asistencia;
				
				return view('la.asistencias.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('asistencia', $asistencia);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("asistencia"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified asistencia.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Asistencias", "edit")) {			
			$asistencia = Asistencia::find($id);
			if(isset($asistencia->id)) {	
				$module = Module::get('Asistencias');
				
				$module->row = $asistencia;
				
				return view('la.asistencias.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('asistencia', $asistencia);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("asistencia"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

		/**
	 * Show the form for creating a new asistencia.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function cancel_from_email($id)
	{
		
	
		$asistencia=Asistencia::find($id);
		$convocatoria_id=$asistencia->convocatoria_id;
		$convocatoria=Convocatoria::find($convocatoria_id);
      
       /*
		$date1 = date('Y-m-d H:i');
		$date2 = $convocatoria->horario;

		$diff = abs(strtotime($date1) -strtotime($date2));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		*/
		$date1 = new \DateTime( date('Y-m-d H:i'));
		$date2 = new \DateTime($convocatoria->horario);
	    $interval = $date1->diff($date2);
		$days = $interval->format('%r%a'); 
		$dayofweek =date('w', strtotime($convocatoria->horario));
		return View('la.asistencias.cancel_email',compact('asistencia','convocatoria_id','convocatoria','days','dayofweek'));
		
	}

	/**
	 * Update the specified asistencia in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Asistencias", "edit")) {
			
			$rules = Module::validateRules("Asistencias", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Asistencias", $request, $id);


			if($request->asistencia == 1){
			$comites = Comite::join('convocatorias','convocatorias.comite_id','=','comites.id')->where('convocatorias.id',$request->convocatoria_id)->select(array('comites.*'))->get();
			$convocatoria= Convocatoria::find($request->convocatoria_id);
			$correo = Contacto::where('id',$request->miembro_id)->value('correo');
			$miembroname = Contacto::where('id',$request->miembro_id)->value('nombre');
            $miembro = $request->miembro_id;

            foreach($comites as $com){
            $coordinador = Employee::where('id',$com->coordinador)->value('email');
			$presidente = Employee::where('id',$com->presidente)->value('email');
			$vice = Employee::where('id',$com->vicepresidente)->value('email');
			$comite = $com->nombre;	
			}

	     
           
				Mail::queue('emails.encuesta', array(
					        'convocatoria_id' =>$request->convocatoria_id,
					        'comitename' => $comite,
					        'miembroname' => $miembroname,
                            'name' => $convocatoria->tituloconvactoria,
                            'horario' => $convocatoria->horario,
                 
                        ), function($message) use ($correo,$coordinador,$comite)
                    {
                       $message->from($coordinador);
                       $message->to($correo)->subject('Encuesta del comité'.' '.$comite);
                       $message->replyTo($coordinador, 'Amcham Comité'.' '.$comite);
                      
                    });
			}

			if($request->estatus == 'Cancelada' ||$request->estatus == 'Cancelada con cobre'){
				$comites = Comite::join('convocatorias','convocatorias.comite_id','=','comites.id')->where('convocatorias.id',$request->convocatoria_id)->select(array('comites.*'))->get();
			$convocatoria= Convocatoria::find($request->convocatoria_id);
			$correo = Contacto::where('id',$request->miembro_id)->value('correo');
			$miembroname = Contacto::where('id',$request->miembro_id)->value('nombre');
            $miembro = $request->miembro_id;

            foreach($comites as $com){
            $coordinador = Employee::where('id',$com->coordinador)->value('email');
			$presidente = Employee::where('id',$com->presidente)->value('email');
			$vice = Employee::where('id',$com->vicepresidente)->value('email');
			$comite = $com->nombre;	
			}

	       $imgs = Upload::find($convocatoria->temarioimagen);
			
		   $logoexp = Upload::find($convocatoria->logoexpositor);
           
				Mail::queue('emails.confirmacion_cancelacion', array(
					        'asistencia_id' => $id,
					        'comitename' => $comite,
					        'miembroname' => $miembroname,
                            'name' => $convocatoria->tituloconvactoria,
                            'horario' => $convocatoria->horario,
                            'sedenombre' => $convocatoria->sedenombre,
                            'sededomicilio' => $convocatoria->sededomicilio,
                            'preciosocio' => $convocatoria->preciosocio,
                            'precionosocio' => $convocatoria->precionosocio,
                            'temario' => $convocatoria->temario,
						    'temarioimagen' => $imgs,
						    'expositor' => $convocatoria->expositor,
						    'logoexpositor' => $logoexp,
						    'comentarios' => $convocatoria->comentarios
                        ), function($message) use ($correo,$coordinador,$comite)
                    {
                       $message->from($coordinador);
                       $message->to($correo)->subject('Confirmación de Cancelación del comité'.' '.$comite);
                       $message->replyTo($coordinador, 'Amcham Comité'.' '.$comite);
                      
                    });
			}

			return redirect()->route(config('laraadmin.adminRoute') . '.asistencias.index');
			
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified asistencia from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Asistencias", "delete")) {
			Asistencia::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.asistencias.index');
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
		$values = DB::table('asistencias')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Asistencias');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/asistencias/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}

			$comite= Asistencia::where('asistencias.id',$data->data[$i][0])->select(array('convocatoria_id'))->value('convocatoria_id');
			$estatus= Asistencia::where('asistencias.id',$data->data[$i][0])->select(array('estatus'))->value('estatus');
			$asistencia= Asistencia::where('asistencias.id',$data->data[$i][0])->select(array('asistencia'))->value('asistencia');
			$miembro= Asistencia::where('asistencias.id',$data->data[$i][0])->select(array('miembro_id'))->value('miembro_id');
			
			if($this->show_action) {
				$output = '';
					if(Module::hasAccess("Asistencias", "edit") && $estatus == 'Si'&& $asistencia == 0) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $data->data[$i][0]], 'method' => 'PATCH', 'style'=>'display:inline']);
					$output .= '<input type="hidden" name="convocatoria_id" value="'.$comite.'">';
					$output .= '<input type="hidden" name="miembro_id" value="'.$miembro.'">';
					$output .= '<label>Asistencia</label>';
					$output .= '<input type="checkbox" name="asistencia" value="1">';
					$output .= Form::submit();
					$output .= Form::close();
					$output .= '<br>';
				}
				if(Module::hasAccess("Asistencias", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/asistencias/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Asistencias", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.asistencias.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
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
