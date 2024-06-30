<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;

class BlogController extends Controller
{
    public function showArticle(Post $post, string $id){
        $post = \App\Models\Post::findOrFail($id);
        return $post;
    }

    public function index(BlogFilterRequest $request){
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);

    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){

        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'slug' => Str::slug($request->input('title'))
        ]);

        return redirect()->route('show', [
            'slug' => $post->slug,
            'post' => $post->id
        ]);
    }
}
