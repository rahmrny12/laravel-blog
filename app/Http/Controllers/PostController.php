<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::latest()->search($request->keyword)->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post,
            'comments' => Comment::all()->sortDesc()->where('post_id', $post->id)
        ]);
    }
}
