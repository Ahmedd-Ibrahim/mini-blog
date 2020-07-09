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
    Route::get('services/add','servicesController@add');  // main services
    Route::post('services/save','servicesController@save');  // insert Services
    Route::any('services/delete/{services_id}','servicesController@delete');  // Delete Services
    Route::get('services/edit/{services_id}','servicesController@edit');  // Edit Services
    Route::any('services/update/{id}','servicesController@update');  // update Services
    });

    // ##### End services route


    //###### portfoilo route

    Route::group(['namespace'=>'Portfolio'],function(){
    Route::get('portfolio','portfolioController@index');  // main Portfolio
    Route::get('portfolio/add','portfolioController@add');  // main services
    Route::post('portfolio/save','portfolioController@save');  // insert Portfolio
    Route::any('portfolio/delete/{portfolio}','portfolioController@delete');  // Delete Portfolio
    Route::get('portfolio/edit/{portfolio}','portfolioController@edit');  // Edit Portfolio
    Route::post('portfolio/update/{portfolio}','portfolioController@update');  // update Portfolio

    });

    // #### End portfoilo route

    //###### about route
    Route::group(['namespace'=>'about'],function(){
    Route::get('about','aboutController@index');  // main about
    Route::get('about/add','aboutController@add');  // main add
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
    Route::get('team','teamController@index');  // main team
    Route::get('team/add','teamController@add');  // main add
    Route::post('team/save','teamController@save');  // insert team
    Route::any('team/delete/{about}','teamController@delete');  // Delete team
    Route::get('team/edit/{about}','teamController@edit');  // Edit team
    Route::post('team/update/{about}','teamController@update');  // update team
    });
    // #### End team route
    //###### posts route
    Route::group(['namespace'=>'blog'],function(){

    // Route::get('mangePosts','postsController@mangePosts');  //  mange blog posts
    // Route::get('posts','postsController@index');  // add blog post
    // Route::post('posts/save','postsController@save');  // insert blog post
    // Route::any('posts/delete/{posts}','postsController@delete');  // Delete post
    // Route::get('posts/edit/{posts}','postsController@edit');  // Edit post
    // Route::post('posts/update/{posts}','postsController@update');  // update post

    Route::resource('categories', 'CategoryController', ['except' => ['create']]);
    Route::resource('tags', 'TagController', ['except' => ['create']]);

    // Comments
    Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store'])->withoutMiddleware('auth');
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
    });
    // #### End posts route
    ###### Comments route
    Route::group(['namespace'=>'blog'],function(){

    Route::get('comments','commentsController@index');  //  mange blog posts

    });
    #### End comments route


     #### begin main pages
    Route::group(['namespace'=>'pages'],function(){
        Route::get('pages','pagesController@pages');  //  mange posts

        });
    ####### End Main pages

    ####### begin Clinet route
    Route::group(['namespace'=>'clinet'],function(){

        Route::get('clinet','clinetController@index');  //  mange clinets
         Route::get('clinet/edit/{clinet}','clinetController@edit');  // Edit clinets
         Route::post('clinet/update/{clinet}','clinetController@update');  // update clinets
        });
    ####### End Clinet route




});


