<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Blog;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class BlogController extends Controller
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
            $blogs = Blog::find($id);
                return view('blog-post',compact('blogs'));
    
    }
}