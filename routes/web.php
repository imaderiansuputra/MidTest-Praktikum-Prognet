<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUnauthController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\ResponController;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('home');
});

Route::prefix('user/')->name('user.')->group(function () {
    
    Route::get('/', function() {
        return redirect()->route('login');
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('register', [UserController::class, 'register_index']);
        Route::post('registersave', [UserController::class, 'register']);
        Route::get('login', [UserController::class, 'index'])->name('login-index');
        Route::post('loginsave', [UserController::class, 'login'])->name('login');
    });

    Route::middleware('auth:user', 'verified')->group(function () {
        Route::post('logout', [UserController::class, 'logout']);
        Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

        Route::get('keluhan/index', [KeluhanController::class, 'index']);
        Route::get('keluhan/show/{id}', [KeluhanController::class, 'show']);
        Route::get('keluhan/{id}/edit', [KeluhanController::class, 'edit']);
        Route::get('keluhan/{id}/delete', [KeluhanController::class, 'delete']);
        Route::post('keluhan/{id}/update', [KeluhanController::class, 'update']);
        Route::get('keluhan/create', [KeluhanController::class, 'create']);
        Route::post('keluhan/store', [KeluhanController::class, 'store']);
    });  

});

Route::prefix('admin/')->name('admin.')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin.login');
    });

    Route::middleware('guest')->group(function () { 
        Route::get('login', [AdminAuthController::class, 'index'])->name('login-index');
        Route::post('login', [AdminAuthController::class, 'login'])->name('login');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
        
        Route::get('respon/index', [ResponController::class, 'index']);
        Route::get('respon/show/{id}', [ResponController::class, 'show']);
        Route::get('respon/{id}/create', [ResponController::class, 'create']);
        Route::get('respon/{id}/edit', [ResponController::class, 'edit']);
        Route::get('respon/{id}/delete', [ResponController::class, 'delete']);
        Route::post('respon/{id}/update', [ResponController::class, 'update']);
        Route::post('respon/{id}/save', [ResponController::class, 'save']);
        Route::post('respon/store', [ResponController::class, 'store']);
    });
});