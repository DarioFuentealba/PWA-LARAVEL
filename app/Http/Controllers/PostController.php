<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Session;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //Mostrar listado de posts
    public function getIndex($id)
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function getCategoryPost($category_id)
    {
        $posts = Post::where('category_id', '=', $category_id)->get();

        return view('post.index', compact('posts'));
    }

    public function getUserPost()
    {
        $user = Auth::user(); // o simplemente Auth::id()
        $posts = Post::where('user_id', $user->id)->get();

        return view('post.userPost', compact('posts'));
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
        $session = Session::all();
        return view('post.create', compact('category', 'session'));
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

        return redirect('/post')->with('success', 'Post creado exitosamente.');
    }

    //Mostrar formulario de edición
    public function getEdit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    //Procesar actualización del post
    public function update(Request $request, $id)
    {
        //Validación
        $request->validate([
            'user_id' => 'required',
            'title' => 'required|max:255',
            'poster' => 'nullable|string',
            'content' => 'required',
            'habilitated' => 'required|boolean',
            'category' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/post')->with('success', 'Post actualizado exitosamente.');
    }

    //Eliminar un post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/post')->with('success', 'Post eliminado exitosamente.');
    }
}
