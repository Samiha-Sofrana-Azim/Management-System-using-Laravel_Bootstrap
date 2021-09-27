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
// Route::get('/', function () {
//     return view('home');
// })->name('/');

use App\Http\Controllers\AdvisingController;
use App\Http\Controllers\InfoController;

Auth::routes();
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',"StudentController@index") ;
Route::get('/edit/{id}',"StudentController@edit") ;
Route::get('/destroy/{id}',"StudentController@destroy") ;
Route::get('/show/{id}',"StudentController@show") ;
// Route::get('/details/{id}',"StudentController@details") ;
Route::get('/create',"StudentController@create") ;
Route::post('/store',"StudentController@store") ;
Route::post('/update/{id}',"StudentController@update") ;
Route::get('data',[AdvisingController::class,'index']);
Route::get('info',[InfoController::class,'index']);







