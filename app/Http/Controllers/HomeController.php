<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }

    public function index(){
    $categories = [
        ['label' => 'mitologia', 'name' => 'mitologia'],
        ['label' => 'leyendas', 'name' => 'leyendas'],
        ['label' => 'dioses', 'name' => 'dioses'],
        // agregá más categorías si querés
    ];

    return view('home', compact('categories'));
    }

}
