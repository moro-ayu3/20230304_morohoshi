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

    public function find()
     {
    return view('find', ['input' => '']);
    }

    public function serach(Request $request)
     {
    $todo = Todo::find($request->input);
    $param = [
      'todo' => $todo,
      'input' => $request->input
    ];
    return view('find', $param);
    }

    public function edit(Request $request)
     {
    $todo = Todo::find($request->id);
    return view('edit', ['form' => $todo]);
    }

    public function delete(Request $request)
     {
    $todo = Todo::find($request->id);
    return view('delete', ['form' => $todo]);
    }

  public function destroy(Request $request)
   {
    Todo::find($request->id)->delete();
    return redirect('/');
  }
}
