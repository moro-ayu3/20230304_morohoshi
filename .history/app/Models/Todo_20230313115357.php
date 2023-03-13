<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{}
    use HasFactory;

    protected $guard = ['id'];
              $fillable = ['content'];


    public function books(){
      return $this->hasMany('App\Models\Book');
    }
    