<?php

namespace App\Http\Controllers;

use App\Post;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('id', '>=', 150)->get();

        dd($posts);
        return view('welcome');
    }
}
