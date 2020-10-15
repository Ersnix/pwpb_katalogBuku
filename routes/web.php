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


//TEST PROJEKNYA//
Route::get('/login','LoginController@index');
Route::get('/register','RegisterController@index');
Route::post('login/prosesLogin','LoginController@prosesLogin');
Route::post('register/prosesRegister','RegisterController@prosesRegister');
Route::get('admin','AdminController@index');
Route::get('pemilik','PemilikController@index');
Route::get('konsumen','KonsumenController@index');
Route::get('/logout','LoginController@logOut');
Route::get('pemilik/deletebuku/{id}','PemilikController@delete');
Route::get('pemilik/tambahBuku','PemilikController@tambah');
Route::post('pemilik/prosesTambahBuku','PemilikController@prosesTambahBuku');
Route::get('pemilik/editbuku/{id}','PemilikController@edit');
Route::post('pemilik/prosesEditBuku','PemilikController@prosesEditBuku');

