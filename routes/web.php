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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/me', function () {
    return view('me');
});

Route::get('/experiences', function () {
    return view('experiences');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/siswa/{jurusan}/{nama}', function ($jurusan, $nama) {
    return "<h3> Jurusan : $jurusan </h3> <p>Nama : $nama</p>";
});

Route::get('/siswa/{nipd}', function ($nipd) {
    return "NIPD Siswa : $nipd";
})->where('nipd', '[A-Z]{2}[0-9]');

Route::get('/siswa', 'SiswaController@index');
Route::get('/simpansiswa','SiswaController@insertSiswa');

Route::fallback(function(){
    return 'Salah';
});