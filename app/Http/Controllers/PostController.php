<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //Mostrar listado de posts
    public function getIndex()
    {
        $posts = Post::paginate(5);
        $users = User::all();
        return view('post.index', compact('posts', 'users'));
    }

    public function getCategoryPost($category_id)
    {
        $posts = Post::where('category_id', '=', $category_id)->paginate(5);
        $categories = Category::findOrFail($category_id);
        return view('post.index', compact('posts', 'categories'));
    }

    public function getUserPosts()
    {
        $user = Auth::user(); // o simplemente Auth::id()
        $posts = Post::where('user_id', $user->id)->paginate(5);
        return view('post.userPosts', compact('posts'));
    }
    //Mostrar un post individual
    public function getShow($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    //Mostrar formulario de creación
    public function getCreate()
    {
        $category = Category::all();
        $user = Auth::user(); // o simplemente Auth::id()
        return view('post.create', compact('category', 'user'));
    }

    //Procesar creación del post
    public function store(Request $request)
    {
        //Validación (opcional pero recomendado)

        $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'title' => 'required|max:255',
            'poster' => 'nullable|string',
            'content' => 'required',
            'habilitated' => 'required|boolean',
        ]);

        Post::create($request->all());

        $user = Auth::user(); // o simplemente Auth::id()
        $posts = Post::where('user_id', $user->id)->get();
        return view('post.userPosts', compact('posts'));
    }

    //Mostrar formulario de edición
    public function getEdit($id)
    {
        $category = Category::all();
        $user = Auth::user(); // o simplemente Auth::id()
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post', 'user', 'category'));
    }

    //Procesar actualización del post
    public function update(Request $request, $id)
    {
        //Validación
        $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'title' => 'required|max:255',
            'poster' => 'nullable|string',
            'content' => 'required',
            'habilitated' => 'required|boolean',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    //Eliminar un post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/post')->with('success', 'Post eliminado exitosamente.');
    }
}
