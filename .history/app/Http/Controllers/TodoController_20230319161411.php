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
        $todos =Todo::all();
        $todos =$user->todos;
        $tags = Tag::all();
        return view('index',['todos'=>$todos, 'user' => $user, 'tags'=>$tags]);
    }

    public function store(TodoRequest $request)
     {
        $todos =$request->content();
        $todos =$request->tag_id();
        Todo::create($todos);
        return redirect('/');
    }

    public function update(TodoRequest $request)
     {
       $todos = $request->content();
       $todos = $request->tag_id();
       Todo::find( $request->id)->update($todos);
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
       $todos=[];
       return view('search',[$todos, $user, $tags]);
    }

    public function search(Request $request)
     {
       $user= Auth::user();
       $tags= Tag::all();
       $keyword= $request->keyword();
       $tag_id= $request->tag_id();
       $todos = Todo::query();
       if(!empty($keyword)) {
        $todos->where('content', 'LIKE', "%{$keyword}%")
        ->orwhereHas('todo', function ($query) use ($keyword) {
            $query->where('tag_id', 'LIKE', "%{$keyword}%");
        $param = [
      'tag' => $author
    ];
            })->get();
       ;}
       return view('search',[$todos, $user, $tags]);
    }
}
