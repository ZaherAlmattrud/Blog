<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {



        $posts = Post::published()->sample()->latest()->paginate(10);

        $postsPremium = Post::published()->premium()->latest()->get();

        $categories = Category::has('posts')->get();

        return view('home')->with(['posts' => $posts, 'postsPremium' => $postsPremium, 'categories' => $categories, 'category' => null]);
    }

    public function postsByCategory(Category $category)
    {


        return view('home')->with([
            'posts' => $category->posts()->paginate(10),
            'category' => $category,
            'categories' => Category::has('posts')->get()
        ]);
    }

    public function changeLanguage($lang){

        session()->forget('lang');
        session()->set('lang' , $lang);
        return redirect()->back();

    }
}
