<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $posts = Post::with('category')->orderBy('published_at', 'DESC')->limit(5)->get();
        return view('welcome2', [
            'posts' => $posts
        ]);
    }
}
