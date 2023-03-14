<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Models\Todo;
  use App\Http\Requests\TodoRequest;
  use App\Models\Tag;
  use App\Http\Controllers\Auth;

  class TodoController extends Controller
  {
    public function index()
     {
        $todos= Todo::all();
        return view('index',['todos'=>$todos]);
        $tags= Tag::all();
        $user= Auth::login;
  }

    public function store(TodoRequest $request)
     {
        $todo = new Todo;
        $todo->name =$request->input('new_todo');
        $todo=$request->content();
        $todo=$request->tag();
        Todo::create($todo);
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
       Todo::find($request->id)->delete();
       return redirect('/');
    }

    public function relate(Request $request)
     {
       $hastags = Tag::has('tag')->get();
       $notags = Tag::doesntHave('tag')->get();
       $param = ['hastags' => $hastags, 'notags' => $notags];
       return view('tag.index',$param);
    }

    public function relate(Request $request)
     {
       $hasusers = User::has('user')->get();
       $nousers = User::doesntHave('user')->get();
       $param = ['hasusers' => $hasusers, 'nousers' => $nousers];
       return view('user.index',$param);
    }

  }