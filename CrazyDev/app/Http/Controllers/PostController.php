<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with(['user', 'comments.user'])->findOrFail($id);
        $comments = $post->comments()->with('user')->paginate(10);
        return view('post', compact('post', 'comments'));
    }
}
