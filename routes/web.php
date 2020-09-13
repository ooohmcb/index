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
Route::get('mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::get('mahasiswa/create','App\Http\Controllers\MahasiswaController@create');
Route::post('mahasiswa/store','App\Http\Controllers\MahasiswaController@store');
Route::delete('mahasiswa/delete/{id}','App\Http\Controllers\MahasiswaController@destroy');

Route::get('/', function () {
    return view('welcome');
});
