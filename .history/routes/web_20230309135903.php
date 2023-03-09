<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

Route::post()
(/todo/create', [TodoController::class, 'store']);

Route::post('/todo/update', [TodoController::class, 'update']);

Route::get('/todo/delete', [TodoController::class, 'delete']);