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

Route::get('/getTemplate/{string}/{id?}', function($string, $id = null){

    if($string == 'goon'){
        
        return redirect()->route('goon.show', $id);
    }

    if (View::exists("portfolio.".$string)) {
        return view("portfolio.".$string)->with('id', $id);
    }else{
        return  view("portfolio.notFound")->with('string',$string) ;
    }
    
});

// Goon controller route

Route::resource('goon', 'GoonController');
Route::resource('category', 'CategoryController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
