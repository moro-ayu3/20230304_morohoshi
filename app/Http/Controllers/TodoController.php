<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
 Route::get('/todo',
  [TodoController::class, 'index' ]);

  namespace App\Http\Controllers;
  use Illuminate\Http\Request; class TestController extends Controller
  { public function index()
     { $todos= Todo::all();

    return view('index', $todos);
  }
  }