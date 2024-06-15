<?php

use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\WeaponPageController;
use App\Http\Controllers\ProfileController;
use App\Models\Type;
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

Route::get('/', function () {
  $types = Type::all();
    return view('welcome', compact('types'));
});


Route::middleware(['auth', 'verified'])
->name('admin.')
->prefix('admin')
->group(function () {

  Route::get('/', function () {
    return view('admin.dashboard');
  })->name('dashboard');

  //  Route::resource('weapons', WeaponPageController::class);

  Route::resource('weapons', WeaponPageController::class);

  Route::resource('characters', CharacterController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
