<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function getPostComments($postId)
    {

        $comments = Comment::with('user')->where('post_id', $postId)->latest()->get();

        return response()->json($comments);
    }

    public function store(Request $request)
    {

        $comment = Comment::created([

            'body' => $request->body,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
        ]);

        return response()->json($comment->load('user'));
    }
}
