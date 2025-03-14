<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;



Route::get('/', [AuthManager::class, 'home'])->name('dashborde');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('loginpost');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [AuthManager::class, 'singUp'])->name('register');
Route::post('/register', [AuthManager::class, 'regpost'])->name('registerpost');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms/store', [RoomController::class, 'store'])->name('rooms.store');

