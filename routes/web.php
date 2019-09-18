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
//
//Route::get('/', function () {    return view('welcome');});
Route::get('/','InicioController@index')->name('inicio');
Route::get('seguridad/login','Auth\LoginController@index')->name('login');
Route::post('seguridad/login','Auth\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Auth\LoginController@logout')->name('logout');
///////////////////////////////////////////////////
Route::get('admin/tags','Admin\TagController@index')->name('tags');
Route::resource('tags', 		'Admin\TagController');
Route::get('admin/tiendas','Admin\TiendaController@index')->name('tiendas');
Route::resource('tiendas', 	'Admin\TiendaController');

Route::get('admin/productos','Admin\ProductoController@index')->name('productos');
Route::resource('productos', 'Admin\ProductoController');

Route::get('admin/eventos','Admin\EventoController@index')->name('eventos');
Route::resource('eventos', 'Admin\EventoController');

Route::get('admin/promos','Admin\PromoController@index')->name('promos');
Route::resource('promos', 'Admin\PromoController');

Route::get('admin/anuncios','Admin\AnuncioController@index')->name('anuncios');
Route::resource('anuncios', 'Admin\AnuncioController');
/*
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','Superadmin']],function(){
    Route::get('', 'AdminController@index' ) ;
});*/
