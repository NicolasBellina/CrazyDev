<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        // Récupérer tous les posts avec les informations de l'auteur
        $posts = Post::with('user')->get();

        // Passer les posts à la vue
        return view('forum', compact('posts'));
    }
}
