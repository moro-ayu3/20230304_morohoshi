<?php

use Illuminate\Support\Facades\Route;

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
return view('welcome');
});


Route::get('/{todo}', function ($todos) {
return '$todos';
});aaaa






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