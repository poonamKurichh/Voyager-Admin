<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Web Routes for home page
|--------------------------------------------------------------------------
*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');

/*
|--------------------------------------------------------------------------
| Routes to minify css code.
|--------------------------------------------------------------------------
*/
Route::get('/css-minify', 'App\Http\Controllers\HomeController@cssView');
Route::post('/css-minify', 'App\Http\Controllers\HomeController@minifyCss');


/*
|--------------------------------------------------------------------------
| Web Routes for minifying javascript code
|--------------------------------------------------------------------------
*/
Route::get('/js-minify', 'App\Http\Controllers\HomeController@jsView');
Route::post('/js-minify', 'App\Http\Controllers\HomeController@minifyJavascript');


/*
|--------------------------------------------------------------------------
| Web Routes for minifying HTML code
|--------------------------------------------------------------------------
*/
Route::get('/html-minify', 'App\Http\Controllers\HomeController@htmlView');
Route::post('/html-minify', 'App\Http\Controllers\HomeController@minifyHtml');


/*
|--------------------------------------------------------------------------
| This route will display about page
|--------------------------------------------------------------------------
*/
Route::get('/about', function (){
    $posts = DB::select('select * from posts');
    return view('about',['posts' => $posts]);
});


/*
|--------------------------------------------------------------------------
| Web routes to manage contact page
|--------------------------------------------------------------------------
*/
Route::get('/contact', function (){
    $posts = DB::select('select * from posts');
    return view('contact',['posts' => $posts]);
});
Route::post('/contact', 'App\Http\Controllers\HomeController@contact');


/*
|--------------------------------------------------------------------------
| This route will display an error page
|--------------------------------------------------------------------------
*/
Route::get('error', function (){
    $posts = DB::select('select * from posts');
    return view('404',['posts' => $posts]);
});


/*
|--------------------------------------------------------------------------
| Redirect all non existing page to error page
|--------------------------------------------------------------------------
*/
/*Route::any('{catchall}', function() {
    return redirect('/error');
})->where('catchall', '.*');*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('pages_clone','App\Http\Controllers\Voyager\PageController@page_clone')->name('clone_page');
    Voyager::routes();
});
