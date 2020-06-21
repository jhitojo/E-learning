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
//Login
Route::get('/admin', 'AdminController@dashboard')->name('admin');
Route::get('/dosen', 'DosenController@dashboard')->name('dosen');
Route::get('/mahasiswa', 'mahasiswaController@dashboard')->name('mahasiswa');


//Dashboard admin
// Route::get('/admin','AdminController@dashboard');
// Route::get('/session','SessionController@index');
// Route::get('/create-session','SessionController@createSession');
// Route::get('/get-session','SessionController@getSession');
// Route::get('/delete-session','SessionController@deleteSession');


//admin -> manajemen Mahasiswa
Route::get('/admin/mahasiswa','AdminController@index_mhs');
Route::get('/admin/mahasiswa/create','AdminController@create_mhs');
Route::get('/admin/mahasiswa/{mahasiswa}','AdminController@show_mhs');
Route::post('/admin/mahasiswa','AdminController@store_mhs');
Route::delete('/admin/mahasiswa/{mahasiswa}','AdminController@destroy_mhs');
Route::get('/admin/mahasiswa/{mahasiswa}/edit','AdminController@edit_mhs');
Route::patch('/admin/mahasiswa/{mahasiswa}','AdminController@update_mhs');

//admin -> manajemen Dosen
Route::get('/admin/dosen','AdminController@index_dosen');
Route::get('/admin/dosen/create','AdminController@create_dosen');
Route::get('/admin/dosen/{dosen}','AdminController@show_dosen');
Route::post('/admin/dosen','AdminController@store_dosen');
Route::delete('/admin/dosen/{dosen}','AdminController@destroy_dosen');
Route::get('/admin/dosen/{dosen}/edit','AdminController@edit_dosen');
Route::patch('/admin/dosen/{dosen}','AdminController@update_dosen');

// Route::get('/dosen','DosenController@dosen');
Route::get('/admin/kelas','AdminController@kelas');
Route::get('/admin/matakuliah','AdminController@matakuliah');
Route::get('/admin/materi','AdminController@materi');
Route::get('/admin/tugas','AdminController@tugas');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Route dosen
Route::get('/dosen/materi', 'DosenController@materi');
Route::get('/dosen/tugas', 'DosenController@tugas');

//Route mahasiswa
Route::get('/mahasiswa/materi', 'MahasiswaController@materi');
Route::get('/mahasiswa/tugas', 'MahasiswaController@tugas');