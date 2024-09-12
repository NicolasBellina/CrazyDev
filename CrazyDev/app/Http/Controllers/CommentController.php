<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté !');
        }

        $request->validate([
            'body' => 'required',
            'post_id' => 'required|exists:posts,id',
        ]);

        // Create the comment
        Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => Auth::id()
        ]);

        $commentCount = Comment::where('post_id', $request->post_id)->count();
        $commentsPerPage = 10;
        $lastPage = ceil($commentCount / $commentsPerPage);

        return redirect()->route('posts.show', ['id' => $request->post_id, 'page' => $lastPage]);
    }

}
