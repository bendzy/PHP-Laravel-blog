<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/********** MAIN PAGE ROUTES ***********/
//index.blade
Route::get('/',['uses' => 'BlogController@index']);
// index.blade -> create.blade (href to create post)
Route::get("/create","BlogController@create");
// about route
Route::get("/about","BlogController@about");




/************ POSTS ROUTES ***********/
//Create / insert post to DB
Route::post("/","BlogController@store");

//shows specific post depends by id
Route::get('/{id}','BlogController@show');
//edit post
Route::get("/{id}/edit","BlogController@edit");

//apply edited post
Route::patch("/{id}","BlogController@update");
Route::delete("/{id}","BlogController@destroy");




/****** COMMENTS ROUTES ************/

Route::post("/{id}/comment","BlogController@comment");

