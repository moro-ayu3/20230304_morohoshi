<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Models\Todo;
  use App\Http\Requests\TodoRequest;
  class TodoController extends Controller
  {
    public function index()
     {
        $todos= Todo::all();
        return view('index',['todos'=>$todos]);
  }

    public function store(TodoRequest $request)
     {
        $todo = new Todo;
        $todo->name =$request->input('new_todo');
        $form=$request->all();
        Todo::create($form);
        unset($form['_token']);
        return redirect('/');
    }

    public function update(TodoRequest $request)
     {
       $form = $request->all();
       unset($form['_token']);
       Todo::where('id', $request->id)->update($form);
       return redirect('/');
    }

    public function delete(Request $request)
     {
       $form = $request->all();
       Todo::where('id', $request->id)->delete($form);
       return redirect('/');
    }

  }