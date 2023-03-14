<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tags(){
      return $this->hasMany('App\Models\tag');
    }

    public function users(){
      return $this->hasMany('App\Models\user');
    }

    public function isSelectedTag(){
      $tag_id
    }
}