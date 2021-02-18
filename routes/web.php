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
    return view('welcome');
});
Route::group(['middelware' => 'auth' ], function(){
    Route::get('/dashboard', 'StudentController@index');
    Route::get('/create', 'StudentController@create');
    Route::post('/create/siswa', 'StudentController@store');
    Route::get('/student/{student}/edit', 'StudentController@edit');
    Route::patch('/student/update/{student}', 'StudentController@update');
    Route::delete('/student/delete/{student}', 'StudentController@destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
