<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

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
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dataMahasiswa', function () {
        return view('dataMahasiswa.index');
    })->name('dataMahasiswa');
 
    Route::controller(MahasiswaController::class)->prefix('dataMahasiswa')->group(function () {
        Route::get('', 'index')->name('dataMahasiswa');
        Route::get('create', 'create')->name('dataMahasiswa.create');
        Route::post('store', 'store')->name('dataMahasiswa.store');
        Route::get('show/{id}', 'show')->name('dataMahasiswa.show');
        Route::get('edit/{id}', 'edit')->name('dataMahasiswa.edit');
        Route::put('edit/{id}', 'update')->name('dataMahasiswa.update');
        Route::delete('destroy/{id}', 'destroy')->name('dataMahasiswa.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('dataMahasiswa/search', [MahasiswaController::class, 'search'])->name('dataMahasiswa.search');
});
