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
        $this->validate($request, Todo::$todo);
        $todo = new Todo;
        $todo->name =$request->input('new_todo');
         $form=$request->all();
        unset($form['_token']);
        $form->save('store');
        return redirect('/');
    }

    public function update(TodoRequest $request)
     {
       $this->validate($request, Todo::$todo);
       $form = $request->all();
       unset($form['_token']);
       Todo::where('id', $request->id)->update($form);
       $form->save('update');
       return redirect('/');
    }

    public function delete(Request $request)
     {
    $todo = Todo::find($request->id);
    return view('delete', ['form' => $todo]);
    }

  }