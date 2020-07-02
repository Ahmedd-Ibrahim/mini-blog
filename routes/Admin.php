<?php

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
############# backend route ##########################

Route::group(['prefix' => 'admin','namespace'=>'backend','middleware'=>'auth'], function () { // inseide admine route  & & backend controller
    Route::get('index','indexController@index');

    // ###### services route
    Route::group(['namespace'=>'services'],function(){

    Route::get('services','servicesController@index');  // main services
    Route::post('services/save','servicesController@save');  // insert Services
    Route::any('services/delete/{services_id}','servicesController@delete');  // Delete Services
    Route::get('services/edit/{services_id}','servicesController@edit');  // Edit Services
    Route::post('services/update/{id}','servicesController@update');  // update Services
    });

    // ##### End services route


    //###### portfoilo route

    Route::group(['namespace'=>'Portfolio'],function(){

    Route::get('portfolio','portfolioController@index');  // main services
    Route::post('portfolio/save','portfolioController@save');  // insert Services
    Route::any('portfolio/delete/{portfolio}','portfolioController@delete');  // Delete Services
    Route::get('portfolio/edit/{portfolio}','portfolioController@edit');  // Edit Services
    Route::post('portfolio/update/{portfolio}','portfolioController@update');  // update Services

    });


    // #### End portfoilo route

    //###### about route
    Route::group(['namespace'=>'about'],function(){
    Route::get('about','aboutController@index');  // main about
    Route::post('about/save','aboutController@save');  // insert About
    Route::any('about/delete/{about}','aboutController@delete');  // Delete About
    Route::get('about/edit/{about}','aboutController@edit');  // Edit About
    Route::post('about/update/{about}','aboutController@update');  // update About
    });
    // #### End about route

    //###### Contact route
    Route::group(['namespace'=>'contact'],function(){
    Route::get('contact','contactController@index');  // main contact
    Route::post('contact/save','contactController@save');  // insert Contact
    Route::any('contact/delete/{about}','contactController@delete');  // Delete contact
    Route::get('contact/edit/{about}','contactController@edit');  // Edit contact
    Route::post('contact/update/{about}','contactController@update');  // update contact
    });
    // #### End contact route

    //###### team route
    Route::group(['namespace'=>'team'],function(){
    Route::get('team','teamController@index');  // main contact
    Route::post('team/save','teamController@save');  // insert Contact
    Route::any('team/delete/{about}','teamController@delete');  // Delete contact
    Route::get('team/edit/{about}','teamController@edit');  // Edit contact
    Route::post('team/update/{about}','teamController@update');  // update contact
    });
    // #### End team route
});


