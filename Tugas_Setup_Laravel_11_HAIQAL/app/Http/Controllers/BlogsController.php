<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;

class BlogsController extends Controller

{
    public function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('blogs', ['blogs' => $blogs]);
    }
}