<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $posts = Post::with('category')->paginate(5);
        $postFavorite = Post::with('category')->orderBy('views', 'DESC')->first();
        // dd($postFavorite);
        return view('pages.post.index',[
            'title' => 'Single Post',
            'posts' => $posts,
            'postFavorite' => $postFavorite
        ]);
    }

    public function show(Post $post){
        $post->increment('views');
        return view('pages.post.show',[
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }

    public function search(Request $request){
        $keyword = $request->search;
        $posts = Post::with('category')->where('title', 'like', '%'. $keyword . '%')->paginate(5);
        $postFavorite = Post::with('category')->where('title', 'like', '%'. $keyword . '%')->orderBy('views', 'DESC')->first();
        return view('pages.post.index', [
            'posts' => $posts,
            'postFavorite' => $postFavorite
        ]);
    }
}
