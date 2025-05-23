<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex(){
        $posts = Post::all();
        return view('category.index', compact('posts'));
    }
    public function getShow($id){
        $post = Post::findOrFail($id);
        return view('category.show', compact('post'));
    }
    public function getCreate(){
        return view('category.create');
    }
    public function getEdit($id){
        $post = Post::findOrFail($id);
        return view('category.edit', compact('post'));
    }
}

