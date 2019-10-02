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
//Auth
    //Route::get('/', function () {    return view('welcome');});
    Route::get('/','InicioController@index')->name('inicio');
    Route::get('seguridad/login','Auth\LoginController@index')->name('login');
    Route::post('seguridad/login','Auth\LoginController@login')->name('login_post');
    Route::get('seguridad/logout','Auth\LoginController@logout')->name('logout');
//Auth

//Admin
    Route::get('admin/tags','Admin\TagController@index')->name('tags');
    Route::resource('tags', 		'Admin\TagController');
    Route::get('admin/tiendas','Admin\TiendaController@index')->name('tiendas');
    Route::resource('tiendas', 	'Admin\TiendaController');
    Route::get('admin/productos','Admin\ProductoController@index')->name('productos');
    Route::resource('producto', 	'Admin\ProductoController');
    Route::resource('productos', 'Admin\ProductoController');
    Route::get('admin/eventos','Admin\EventoController@index')->name('eventos');
    Route::resource('eventos', 'Admin\EventoController');
    Route::get('admin/promos','Admin\PromoController@index')->name('promos');
    Route::resource('promos', 'Admin\PromoController');
    Route::get('admin/anuncios','Admin\AnuncioController@index')->name('anuncios');
    Route::resource('anuncios', 'Admin\AnuncioController');
//Admin
//web
    Route::get('admin/productos/{slug}', 'Web\PageController@producto')->name('productos');
    Route::get('admin/promos/{slug}', 'Web\PageController@promo')->name('promos');
    Route::get('admin/promos/show/{slug}', 'Web\PageController@promo')->name('promo');
    Route::get('admin/eventos/{slug}', 'Web\PageController@evento')->name('eventos');
    Route::get('admin/eventos/show/{slug}', 'Web\PageController@evento')->name('evento');
    Route::get('admin/anuncios/{slug}', 'Web\PageController@anuncio')->name('anuncios');
    Route::get('admin/anuncios/show/{slug}', 'Web\PageController@anuncio')->name('anuncio');


    Route::get('/tienda/{slug}', 'Web\PageController@tienda')->name('tienda');
    Route::get('/categoria/{slug}', 'Web\PageController@categoria')->name('categoria');
    Route::get('/departamento/{slug}', 'Web\PageController@departamento')->name('departamento');
    Route::get('admin/tag/{slug}', 'Web\PageController@tag')->name('tag');
//Web
/*
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','Superadmin']],function(){
    Route::get('', 'AdminController@index' ) ;
});*/
