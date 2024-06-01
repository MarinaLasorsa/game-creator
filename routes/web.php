<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WeaponPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//  Route::resource('weapons', WeaponPageController::class);

  Route::get('/', [WeaponPageController::class, 'index'] )->name('index');

Route::resource('characters', CharacterController::class);