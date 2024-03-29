<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = array('id');

    public function getTitle()
    {
        return 'ID'.$this->id . ':' . $this->name;
    }

    public function tag()
    {
      return $this->belongsTo('App\Models\Tag');aa
    }
}