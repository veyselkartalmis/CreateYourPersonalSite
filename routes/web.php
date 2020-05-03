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

Route::get('/', function () {
    return view('backend.header.addHeader');
});

//BACKEND ROUTELARI
Route::namespace("backend")->group(function (){
    //ADD PROFILES
    Route::get("addHeader","HeaderController@index")->name("addShow");
    Route::post("addHeader","HeaderController@create")->name("addHeader");

    //SHOW PROFILES
    Route::get("show","ProfileController@index")->name("showProfiles");

    //EDIT PROFILES
    Route::get("show/edit/{id}","ProfileController@edit")->name("profilEdit");
    Route::post("show/update/{id}","ProfileController@update")->name("profilUpdate");

    //DELETE PROFILES
    Route::get("delete/{id}","ProfileController@delete")->name("profilDelete");
});

//FRONTEND ROUTELARI
Route::namespace("frontend")->group(function (){
    Route::get("show/{id}/{theme}","WebController@index")->name("show");
    Route::get("themes","WebController@showThemes")->name("showThemes");
});

