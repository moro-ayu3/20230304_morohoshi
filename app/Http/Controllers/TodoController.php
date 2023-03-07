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

    public function store()
     {
        return view('store');
    }

    public function save(TodoRequest $request)
     {
        $form=$request->all();
        unset($form['_token']);
        Todo::save($form);
        return redirect('/');
    }

    public function update()
     {
        return view('update');
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

    public function save(TodoRequest $request)
     {
    $form = $request->all();
    unset($form['_token']);
    Todo::where('id', $request->id)->update($form);
    Todo::save($form);
    return redirect('/');
  }
  }