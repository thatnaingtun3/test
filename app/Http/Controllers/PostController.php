<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->save();

        return 'success';
    }

    public function index()
    {
        return Post::all();
    }
}
