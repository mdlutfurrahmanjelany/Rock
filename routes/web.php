<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostController;

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

Auth::routes();

Route::get('/', function () {

    return view('welcome');

});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::resource('/dashboard',DashboardController::class);
    Route::resource('/createpost', PostController::class);

});

Route::get("/about", function () {
    return view('front.pages.about');
});
Route::get("/album", function () {
    return view('front.pages.albums');
});
Route::get("/blog", function () {
    return view('front.pages.blog');
});
Route::get("/contact",function(){
	return view('front.pages.contact');
});