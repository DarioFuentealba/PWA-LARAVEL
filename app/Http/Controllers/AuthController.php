<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(){
        $posts = Post::paginate(5);
        return view('login', compact('posts'));
    }
    public function getLogout(){
        return view('logout');
    }
}