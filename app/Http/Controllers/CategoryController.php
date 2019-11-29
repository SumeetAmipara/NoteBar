<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
    public function index(Request $request,$search_type)
    {
        $Category = Category::where('slug',$search_type)->first();
        if($Category)
        {
            $posts = Post::where("category_id",$Category->id)->get();
            // dd($posts->toArray());
            // return view('postlisting',compact('posts'));
            return view('postlisting',["posts"=>$posts,"catname"=>$Category->name,"img"=>$posts[0]->image]);
        }
    }

}
?>
