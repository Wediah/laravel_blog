<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
//        $this->authorize('admin');
        return view('posts.index', [
            "posts" => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString(),

        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post' => $post
        ]);
    }



}
