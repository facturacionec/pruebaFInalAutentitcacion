<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VentacabController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/usuarios/permisos', [PermissionController::class, 'index'])->name('usuarios.permisos');
    Route::get('/usuarios/roles', [RoleController::class, 'index'])->name('usuarios.roles');

    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
    Route::get('/producto', [ProductoController::class, 'index'])->name('producto');
    Route::get('/venta', [VentacabController::class, 'index'])->name('ventacab');
});
