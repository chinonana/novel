<?php

namespace App\Http\Controllers;

use App\Models\Novel;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index() //追加
   {
       return view('books');
   }
}
