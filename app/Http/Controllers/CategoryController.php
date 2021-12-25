<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    public function index(){
        // return view('test.categories',[
        //     'categories' => Category::all()
        // ]);
        return view('pages.categories.index',[
                'categories' => Category::all()
        ]);
    }

    public function show($slug){

        $category = Category::where('slug', $slug)->first();

        $posts = Post::with('category')->where('category_id', $category->id)->paginate(5);
        $postFavorite = Post::with('category')->orderBy('views', 'DESC')->first();
        return view('pages.categories.show',[
            'posts' => $posts,
            'postFavorite' => $postFavorite
        ]);
    }

    public function tampil(){
        return view('dashboard.categories.index',[
            'categories' => Category::all()
        ]);
    }

    public function create(){
        return view('dashboard.categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
        ]);

        $category = new Category;

        $category->nama = $request->get('nama');
        $category->slug = SlugService::createSlug(Post::class, 'slug', $request->nama);

        $category->save();

        return redirect()->route('category.index')->with('success', 'New post has been added!');
    }

    public function destroy($id){
        $category = Category::where('id', $id)->first();

        Category::find($category->id)->delete();
        return redirect()->route('category.index')
            ->with('success','Article berhasil dihapus');

    }
}
