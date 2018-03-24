<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Patrocinador;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
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
    public function detail($id)
    {
            $eventos = Evento::find($id);
                return view('evento-post',compact('eventos'));
    
    }
}