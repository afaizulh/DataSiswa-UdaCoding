<?php

use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/detail/{id}', [HomeController::class, 'show'])->name('detail');
    Route::get('/create', [HomeController::class, 'create'])->name('create');
    Route::post('/create/store', [DatasiswaController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [DatasiswaController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}/update', [DatasiswaController::class, 'update'])->name('update');
    Route::delete('/detail/{id}/delete', [DatasiswaController::class, 'destroy'])->name('delete');
});
