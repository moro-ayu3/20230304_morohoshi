<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Models\Todo;
  use App\Models\Tag;
  use Illuminate\Support\Facades\Auth;
  use App\Http\Requests\TodoRequest;

  class TodoController extends Controller
{
    public function index()
     {
        $user = Auth::user();
        $tags = Tag::all();
        $todos =$user->todo;
        return view('index',['todo'=>$todo, 'user' => $user, 'tags'=>$tags]);
    }

    public function store(TodoRequest $request)
     {
        $todo=$request->content();
        $todo=$request->tag_id();
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

    public function find(TodoRequest $request)
     {
       $user= Auth::user();
       $tags= Tag::all();
       $todo=[];
       return view('search',[$todo, $user, $tags]);
    }

    public function search(Request $request)
     {
       $user= Auth::user();
       $tags= Tag::all();
       $keyword= $request->keyword();
       $tag_id= $request->tag_id();
       if(!empty($keyword)) {
        $todo->where
       ;}
       return view('search',[$todo, $user, $tags]);
    }
}