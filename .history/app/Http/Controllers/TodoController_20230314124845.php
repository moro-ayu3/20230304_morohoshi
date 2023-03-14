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
        $todo= Todo::all();
        return view('index',['todo'=>$todo]);
        $tags= Tag::all();
        $user= Auth::login;
  }

    public function store(TodoRequest $request)
     {
        $todo=$request->content();
        ->tag_id();
        Todo::create($todo);
        return redirect('/');
    }

    public function update(TodoRequest $request)
     {
       $todo = $request->content();
       $todo = $request->tag_id();
       Todo::find( $request->id)->update($todo);
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

    public function find(TodoRequest $request)
     {
       $user= Auth::login;
       $tags= Tag::all();
       $todo;
       return view('search',[$todo, $user, $tags]);
    }
  }