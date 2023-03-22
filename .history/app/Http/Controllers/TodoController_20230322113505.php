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
       $user_id = Auth::id();
       $form = $request->all();
       $form['user_id'] = $user_id;
       unset($form['_token']);
       Todo::where('id', $request->id)->update($form);
       return redirect('/');
    }

    public function delete(Request $request)
     {
       $user_id = Auth::id();
       Todo::find($request->id)->delete();
       return redirect('/');
    }

    public function find()
     {
       $user= Auth::user();
       $tags= Tag::all();
       $todos = $user->todos;
       return view('search',['todos'=>$todos, 'user'=>$user, 'tags'=>$tags]);
    }

    public function search(Request $request)
     {
       $user= Auth::user();
       $tags= Tag::all();
       $todos = $user->todos;
       $form = $request->all();
       unset($form['_token']);
       $keyword = $form $request->input('keyword');
       $tag_id = $request->input('tag_id');
       $query = Todo::query();
       if(!empty($keyword)) {
        $query->where('content', 'LIKE', "%{$keyword}%");
       }
       if(!empty($tag_id)) {
        $query->where('id','=', "$tag_id");
       }
       $todos = $query->get();
       return view('search',['todos'=>$todos, 'user'=>$user, 'tags'=>$tags]);
    }
}