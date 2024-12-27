<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PlantController::class, 'index']);

// Register
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::delete('/logout', [LoginController::class, 'destroy']);

// Plants
Route::get('/plants/create', [PlantController::class, 'create'])->middleware('auth');;
Route::post('/plants', [PlantController::class, 'store'])->middleware('auth');;
Route::get('/plants/{plant}', [PlantController::class, 'show']);
Route::get('/plants/{plant}/edit', [PlantController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'plant');

Route::patch('/plants/{plant}', [PlantController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'plant');

Route::delete('/plants/{plant}', [PlantController::class, 'destroy'])
    ->middleware('auth')
    ->can('edit', 'plant');
