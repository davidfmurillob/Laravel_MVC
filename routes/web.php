<?php

use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio3Controller;
use App\Http\Controllers\Ejercicio4Controller;
use App\Http\Controllers\Ejercicio5Controller;
use App\Http\Controllers\Ejercicio6Controller;
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
Route::get('/', function (){
    return view('Home.index');
});



Route::get('actividad1', [Ejercicio1Controller::class, 'Ejercicio1'])->name('actividad1');
Route::post('/resultado1', [Ejercicio1Controller::class, 'Resultado1'])->name('resultado1');

Route::get('actividad2', [Ejercicio2Controller::class, 'Ejercicio2'])->name('actividad2');
Route::post('/resultado2', [Ejercicio2Controller::class, 'Resultado2'])->name('resultado2');

Route::get('actividad3', [Ejercicio3Controller::class, 'Ejercicio3'])->name('actividad3');
Route::post('/resultado3', [Ejercicio3Controller::class, 'Resultado3'])->name('resultado3');

Route::get('actividad4', [Ejercicio4Controller::class, 'Ejercicio4'])->name('actividad4');
Route::post('/resultado4', [Ejercicio4Controller::class, 'Resultado4'])->name('resultado4');

Route::get('actividad5', [Ejercicio5Controller::class, 'Ejercicio5'])->name('acctividad5');
Route::post('/resultado5', [Ejercicio5Controller::class, 'Resultado5'])->name('resultado5');

Route::get('actividad6', [Ejercicio6Controller::class, 'Ejercicio6'])->name('actividad6');
Route::post('/resultado6', [Ejercicio6Controller::class, 'Resultado6'])->name('resultado6');