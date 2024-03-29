<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::group(['middleware' => ['auth']],function () {
  Route::get('/', [TodoController::class, 'index']);->name('todo.index');
  Route::post('/todo/create', [TodoController::class, 'store']);->name('todo.create');
  Route::post('/todo/update', [TodoController::class, 'update']);->na
Route::post('/todo/delete', [TodoController::class, 'delete']);
Route::get('/todo/find', [TodoController::class, 'find']);
Route::get('/todo/search', [TodoController::class, 'search']);
});

require __DIR__.'/auth.php';