<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showArticle(string $slug, string $id){
        $post = \App\Models\Post::findOrFail($id);
        return $post;
    }

    public function index(){
        return 'Bonjour les amis';
    }
}
