<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'contents' => 'required'
        ]);

        $validatedData['user_id'] = $request->user_id;
        $validatedData['post_id'] = $request->post_id;

        Comment::create($validatedData);
        return redirect('/posts/' . $request->post_slug)->with('success', 'New Post has been added successfully');
    }
}
