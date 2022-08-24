<?php

namespace App\Http\Controllers;

Use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index ()
    {
        //Non fluent
        //DB::select(['table' => 'posts', 'where' => ('id' => 1)])

        //Fluent
        //DB::table('posts')->where('id', 1)->get()

        $posts = DB::select('select * from posts');

        dd($posts);
    }
}
