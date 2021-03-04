<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


Route::get('/student', function () {
    return view('student.index');
});

Route::post('/student', 'StudentController@create')->name('student.create')->middleware('auth');
Route::put('/student', 'StudentController@update')->name('student.update')->middleware('auth');


Route::get('/instituion', function () {
    return view('instituion.index');
});

Route::post('/instituion', 'InstituionController@create')->name('instituion.create')->middleware('auth');
Route::put('/instituion', 'InstituionController@update')->name('instituion.update')->middleware('auth');


Route::get('/level', function () {
    return view('level.index');
});
Route::post('/level', 'LevelController@create')->name('level.create')->middleware('auth');
Route::put('/level', 'LevelController@update')->name('level.update')->middleware('auth');
