<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
#################### frontend route
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'namespace'=>'frontEnd',
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){
    Route::get('index','indexController@homePage');
    Route::get('portfolio','indexController@portfolio');
    Route::get('contact','indexController@contact');
    Route::get('about','indexController@about');
    Route::get('blog','blogController@blog');
    Route::get('blog/post','blogController@post');
    Route::get('tester','indexController@homePage');
    Route::get('future','indexController@future');



});

