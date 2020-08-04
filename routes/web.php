<?php

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
    return view('intro');
});

Route::get('/getTemplate/{string}', function($string){

    if (View::exists("portfolio.".$string)) {
        return view("portfolio.".$string);
    }else{
        return response( view("portfolio.notFound")->with('string',$string), 404);
    }
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
