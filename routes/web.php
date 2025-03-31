<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/', [AuthManager::class, 'home'])->name('dashborde');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('loginpost');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [AuthManager::class, 'singUp'])->name('register');
Route::post('/register', [AuthManager::class, 'regpost'])->name('registerpost');
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms/store', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms/edit/{room}', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');
Route::resource('roles',RoleController::class);
Route::resource('users',UserController::class);



