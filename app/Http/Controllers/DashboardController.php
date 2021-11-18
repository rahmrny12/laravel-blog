<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'posts' => Post::all(),
            'comments' => Comment::all(),
            'users' => User::all()
        ]);
    }
}
