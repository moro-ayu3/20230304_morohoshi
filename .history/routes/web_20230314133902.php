<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [TodoController::class, 'index']);
Route::get('/login', [AuthenticatedSessionController::class, 'create']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
Route::post('/todo/create', [TodoController::class, 'store']);
Route::post('/todo/update', [TodoController::class, 'update']);
Route::post('/todo/delete', [TodoController::class, 'delete']);
Route::get('/todo/find', [TodoController::class, 'find']);
Route::get('/todo/search', )