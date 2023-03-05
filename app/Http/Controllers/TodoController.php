<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
 Route::get('/todo',
  [TodoController::class, 'index' ]);


  <?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Models\Todo;

  class TodoController extends Controller
  {
    public function index()
     {
        $todos= Todo::all();
        return view('index',['todos'=>$todos]); 
  }
  }