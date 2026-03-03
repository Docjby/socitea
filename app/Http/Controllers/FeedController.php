<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FeedController extends Controller
{
    public function index()
    {
        // DB::enableQueryLog();

        $posts = Post::with(['user', 'reactions', 'comments'])->latest()->get();

        // $queries = DB::getQueryLog();
        // foreach ($queries as $q) {
        //     Log::info("Query: {$q['query']} | Time: {$q['time']}ms");
        // }

        return view('feeds', ['posts' => $posts]);
    }
}