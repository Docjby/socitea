<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FeedController extends Controller
{
    public function index()
    {
        return view('feeds', [
            'posts' => Post::with(['user', 'reactions', 'comments'])->latest()->get(),
        ]);
    }
}
