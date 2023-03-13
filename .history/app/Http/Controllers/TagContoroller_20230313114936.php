<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagContoroller extends Controller
{
    public function index(Request $request)
    {
        $s = Book::all();
        return view('book.index', ['books'=>$books]);
    }

}