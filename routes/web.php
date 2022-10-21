<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\Order_MController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\Type_employeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Auth;
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
    return view('videojuego');
});

Route::get('/administration', function(){
    return view('crud.administration.data');
});

Route::get('/administration/create', function(){
    return view('crud.administration.create');
});

Route::get('/administration/update', function(){
    return view('crud.administration.edit');
});

//**!Ruta de los controladores, NO MOVER ESTO Y SIEMPRE DEBE DE ESTAR HASTA ABAJO DE TODO ESTE DOCUMENTO
//**TODO: Creacion de rutas para el CRUD de la pagina
Route::resource('administrator', AdministrationController::class);
Route::resource('classification', ClassificationController::class);
Route::resource('client', ClientController::class);
Route::resource('console', ConsoleController::class);
Route::resource('employer', EmployerController::class);
Route::resource('order', OrderController::class);
Route::resource('order_m', Order_MController::class);
Route::resource('region', RegionController::class);
Route::resource('state', StateController::class);
Route::resource('status', StatusController::class);
Route::resource('type_employee', Type_employeeController::class);
Route::resource('user', UserController::class);
Route::resource('videogame', VideogameController::class);
Route::resource('gender', GenderController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
