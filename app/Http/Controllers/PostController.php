<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        $posts = Cache::rememberForever('posts:all', function () {
            return Post::all();
        });
    }

    public function show($id)
    {
        $post = Cache::get('posts:'.$id);
        dd($post->title);
    }

    public function store()
    {

    }
}
