<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
/*NAVBAR*/
Route::get('/', 'PublicofertController@ofertas');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/productos', 'StoreController@index');

Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

/*PRUEBA
Route::resource('/categorias', 'StoreController');*/


Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');



Route::get('/nosotros', 'ClientesController@clientes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');
Route::resource('/clientes/todas', 'ClientesController')->middleware('auth');
Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/ofertas/todas', 'PublicofertController')->middleware('auth');

Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');

/*ADMIN*/
//Borrar cache de la aplicación
Route::get('/clear-cache', function(){
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

//Borrar cache de ruta
Route::get('/route-cache', function(){
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//borrar cache de configuracion
Route::get('/config-cache', function(){
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

//Borrar cache de vista
Route::get('/view-clear', function(){
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});
