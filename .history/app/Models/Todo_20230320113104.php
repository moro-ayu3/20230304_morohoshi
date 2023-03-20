<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tags(){
      return $this->belongsTo('App\Models\tag');
    }

    public function users(){
      return $this->belongsTo('App\Models\user');
    }

    public function doSearch(){
      $todos = Todo::query();
       if(!empty($keyword)) {
        $todos->where('content', 'LIKE', "%{$keyword}%")
        ->orwhereHas('todo', function ($query) use ($keyword) {
            $query->where('tag_id', 'LIKE', "%{$tag_id}%");
        $param = [
           'tag_id' => $tag_id
        ];})->get();}
    }
}