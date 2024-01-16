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
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// route::resource('mahasiswa', 'MahasiswaController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dosen')->group(function () {
    // Route untuk halaman profil dosen
    Route::get('/profil', function () {
        return view('v_profil', ['message' => 'Halaman profil dosen']);
    });

    // Route untuk halaman data
    Route::get('/data', function () {
        return view('v_data', ['message' => 'Halaman data dosen']);
    });

    // Route untuk halaman data pengampu
    Route::get('/data_pengampu', function () {
        return view('v_ampu', ['message' => 'Halaman Data Mata Kuliah Yang Diampu']);
    });
});