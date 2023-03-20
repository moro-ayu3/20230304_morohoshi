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
        $todos = $user->todos;
        return view('index',['todos'=>$todos, 'user' => $user, 'tags'=>$tags]);
    }

    public function store(TodoRequest $request)
     {  
        $content = $request->input('content');
        $tag_id = $request->input('tag_id');
        $user_id = Auth::id();
        Todo::create([
             'content' => $content,
             'tag_id' => $tag_id,
             'user_id' => $user_id,
        ]);
        return redirect('/');
    }

    public function update(TodoRequest $request)
     {
       $content = $request->input('content');
        $tag_id = $request->input('tag_id');
        $user_id = Auth::id();
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
            $query->where('tag_id', 'LIKE', "%{$tag_id}%");
        $param = [
           'tag_id' => $tag_id
        ];})->get();}
       return view('search',[$todos, $user, $tags]);
    }
}