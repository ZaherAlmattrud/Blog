<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {



        $posts = Post::published()->sample()->latest()->paginate(10);

        $postsPremium = Post::published()->premium()->latest()->get();


        return view('home')->with(['posts' => $posts, 'postsPremium' => $postsPremium]);
    }
}
