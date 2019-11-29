<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$posts = Post::where("category_id",$Category->id)->get();
        return view('postlisting',["posts"=>$posts,"catname"=>$Category->name,"img"=>$posts[0]->image]);*/
        return view('welcome');
    }
}
