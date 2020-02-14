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
        $posts = Post::orderby('created_at','desc')->get();
        return view('welcome',compact('posts'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function articale    (Request $request,$slug)
    {
        /*$posts = Post::where("category_id",$Category->id)->get();
        return view('postlisting',["posts"=>$posts,"catname"=>$Category->name,"img"=>$posts[0]->image]);*/
        $post = Post::where('slug',$slug)->first();
        if($post){
            return view('single',compact('post'));
        }
    }
}
