<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagContoroller extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::all();
        return view('.index', ['books'=>$books]);
    }

}