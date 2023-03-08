<?php

use Illuminate\Support\Facades\Route;









use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

Route::get('/todo/create', [TodoController::class, 'store']);
Route::post('/todo/create', [TodoController::class, 'create']);

Route::get('/find', [TodoController::class, 'find']);
Route::post('/find', [TodoController::class, 'serach']);
Route::get('/todo/update', [TodoController::class, 'update']);
Route::post('/todo/update', [TodoController::class, 'edit']);

Route::get('/todo/delete', [TodoController::class, 'delete']);
Route::post('/todo/delete', [TodoController::class, 'destroy']);