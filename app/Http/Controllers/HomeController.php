<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {

        $postsPremium = Post::published()->premium()->latest()->get();

        $posts = Post::published()->sample()->latest()->get();


        return view('home')->with(['posts' => $postsPremium, 'postsPremium' => $postsPremium]);
    }
}
