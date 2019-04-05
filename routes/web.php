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
    return view ('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::resource('kategoricosmetics','KategoriController');
Route::get('/lihatdata','crud@index')->name('lihatdata');
Route::get('tambahdata','KategoriController@addform');
Route::post('tambahkategori','KategoriController@store');
Route::get('hapusKategori/{id}','KategoriController@destroy');
Route::get('editKategori/{id}','KategoriController@editform');
Route::post('updateKategori/{id}','KategoriController@update');


Route::resource('detailpesanan','detailpesananController');
Route::get('/lihatdata','crud@index')->name('lihatdata');
Route::get('tambahpesanandata','detailpesananController@addform');
Route::post('tambahdetailpesanan','detailpesananController@store');
Route::get('hapusdetailpesanan/{id}','detailpesananController@destroy');
Route::get('editdetailpesanan/{id}','detailpesananController@editform');
Route::post('updatedetailpesanan/{id}','detailpesananController@update');

Route::resource('subkategori','SubKategoriController');
Route::get('/lihatdata','crud@index')->name('lihatdata');
Route::get('tambahsubdata','SubKategoriController@addform');
Route::post('tambahsubkategori','SubKategoriController@store');
Route::get('hapussubKategori/{id}','SubKategoriController@destroy');
Route::get('editsubKategori/{id}','SubKategoriController@editform');
Route::post('updatesubKategori/{id}','SubKategoriController@update');

Route::resource('produk','produkController');
Route::get('/lihatdata','crud@index')->name('lihatdata');
Route::get('tambahprodukdata','produkController@addform');
Route::post('tambahproduk','produkController@store');
Route::get('hapusproduk/{id}','produkController@destroy');
Route::get('editproduk/{id}','produkController@editform');
Route::post('updateproduk/{id}','produkController@update');


Route::get('master', function () {
    return view('layouts.master');
});

Route::get('sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::get('dashboard2', function () {
    return view('dashboard.dashboard');
});



