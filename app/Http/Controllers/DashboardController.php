<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $post = Post::all();
        $post = Post::with('category')->paginate(10);
        return view('dashboard.post.index', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Category::all());
        return view('dashboard.post.create', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            // 'image' => 'image|file',
            'body' => 'required'
        ]);

        $post = new Post;

        $post->title = $request->get('title');
        $post->category_id = $request->get('category_id');
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->excerpt = Str::limit(strip_tags($request->body), 100);
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
            $post->image = $image_name;
        }
        $post->body = $request->get('body');

        $post->save();

        $category = new Category;
        $category->id = $request->get('category_id');

        $post->category()->associate($category);
        $post->save();



        return redirect()->route('dashboard.index')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($post);
        $post = Post::where('id', $id)->first();
        return view('dashboard.post.show', [
            'post' => $post,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('dashboard.post.edit', [
            'post' => $post,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        $post = Post::with('category')->where('id', $id)->first();

        $post->title = $request->get('title');
        $post->category_id = $request->get('category_id');
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->excerpt = Str::limit(strip_tags($request->body), 100);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $gambar = $request->file('image')->store('images',  'public');
            $post->image = $gambar;
        }

        $post->body = $request->get('body');

        $post->save();

        $category = new Category;
        $category->id = $request->get('category_id');

        $post->category()->associate($category);
        $post->save();



        return redirect()->route('dashboard.index')->with('success', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        if (File::exists('storage/' . $post->image)) {
            File::delete('storage/' . $post->image);
        } else {
            dd("Images does not exts");
        }

        Post::find($post->id)->delete();
        return redirect()->route('dashboard.index')
            ->with('success', 'Article berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
