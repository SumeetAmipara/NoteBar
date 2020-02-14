<?php
// echo bcrypt('123456789');die;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/a', function () {
// 		echo bcrypt("123456789");die;
//     // return view('welcome');
// });
// $Category = \App\Category::get()->pluck("slug")->implode('|');
//  echo $Category;die;
Route::get('category/{search_type}','CategoryController@index');//->where('search_type','css|javascript|laravel|wordpress');
//Route::get('{search_type}', 'HomeController@index')->where('search_type', 'buy|rent|newhomes|sold');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articale/{slug}', 'HomeController@articale')->name('articale');



// Route::get('post', function(){
// 	$post = \App\Category::get();//where('slug', '=', $slug)->firstOrFail();
// 	dd($post);
// 	return view('post', compact('post'));
// });

// php artisan make:model Post
