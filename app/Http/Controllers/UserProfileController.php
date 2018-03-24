<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use Dwij\Laraadmin\Models\LAConfigs;
use Dwij\Laraadmin\Helpers\LAHelper;
use Illuminate\Support\Facades\Input;
use App\Models\Encuesta;
use App\Models\Asistencia;
use App\Models\Convocatoria;
use App\Models\Contacto;
use App\Models\Comite;
use App\Models\Organization;
use App\Models\Employee;
use App\Models\Comite_User;
use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Evento;
use App\Models\Patrocinador;
use App\User;
use App\Models\Upload;
use Mail;
use Carbon\Carbon;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {            
            

        $socios = Contacto::where('contactos.id',Auth::user()->context_id)->select(array('contactos.*'))->whereNULL('deleted_at')->get();    
         
       $comites = Comite::select('comites.*')->orderBy('comites.nombre','ASC')->whereNULL('comites.deleted_at')->get(); 

          



        $noticias = Blog::join('categorias','categorias.id','=','blogs.categoria_id')->select(array('blogs.*','categorias.nombrecat'))->where('categorias.nombrecat','Noticias')->orderBy('blogs.created_at','DESC')->whereNULL('blogs.deleted_at')->paginate(4);

        $infografias = Blog::join('categorias','categorias.id','=','blogs.categoria_id')->select(array('blogs.*','categorias.nombrecat'))->where('categorias.nombrecat','Infografias')->orderBy('blogs.created_at','DESC')->whereNULL('blogs.deleted_at')->paginate(4);

        $capsulas = Blog::join('categorias','categorias.id','=','blogs.categoria_id')->select(array('blogs.*','categorias.nombrecat'))->where('categorias.nombrecat','Capsulas de video')->orderBy('blogs.created_at','DESC')->whereNULL('blogs.deleted_at')->paginate(4);

        $eventos = Evento::leftJoin('patrocinadores','patrocinadores.id','=','eventos.patrocinadores')->select(array('eventos.*','patrocinadores.nombrepatroc','patrocinadores.logopatroc'))->orderBy('eventos.fecha','DESC')->whereNULL('eventos.deleted_at')->paginate(4);


   
			return view('user-profile',compact('socios','comites','blogs','eventos','noticias','infografias','capsulas'));
			
    }
    

}