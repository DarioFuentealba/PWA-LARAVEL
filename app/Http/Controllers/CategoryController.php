<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Mostrar listado de posts
    public function getIndex()
{
        $posts = Post::all();
        return view('category.index', compact('posts'));
    }

    //Mostrar un post individual
    public function getShow($id){
        $post = Post::findOrFail($id);
        return view('category.show', compact('post'));
    }

    //Mostrar formulario de creación
    public function getCreate(){
        return view('category.create');
    }

    //Procesar creación del post
    public function store(Request $request){
        //Validación (opcional pero recomendado)
        $request->validate([
            'title' => 'required|max:255',
            'poster' => 'nullable|string',
            'content' => 'required',
            'habilitated' => 'required|boolean',
        ]);

        Post::create($request->all());

        return redirect('/category')->with('success', 'Post creado exitosamente.');
    }

    //Mostrar formulario de edición
    public function getEdit($id){
        $post = Post::findOrFail($id);
        return view('category.edit', compact('post'));
    }

    //Procesar actualización del post
    public function update(Request $request, $id){
        //Validación
        $request->validate([
            'title' => 'required|max:255',
            'poster' => 'nullable|string',
            'content' => 'required',
            'habilitated' => 'required|boolean',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/category')->with('success', 'Post actualizado exitosamente.');
    }

    //Eliminar un post
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/category')->with('success', 'Post eliminado exitosamente.');
    }
}
