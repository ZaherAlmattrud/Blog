<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $categories = Category::has('posts')->get();
        return view('admin.dashboard')->with([
            'posts' => $posts , 'categories' => $categories
        ]);
    }

    public function loginForm()
    {

        if (auth()->guard('admin')->check()) {

            return redirect()->back();
        }

        return view('admin.auth.login');
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if (auth()->guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('admin.loginForm')->with([
                'error' => 'These credentials do not match our records'
            ]);
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.loginForm');
    }
}
