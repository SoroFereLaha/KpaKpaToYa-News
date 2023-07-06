<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all(); recupere tout les posts dans l'ordre croissant de leur Id
        $posts = Post::latest()->paginate(7); // pour recuperer dans l'ordre du plus recent post au moins recent

        //pour transmettre des données a notre vue (dans notre cas present les posts de notre base de donnee) on les passe en deuxieme argument de la function view
        return view('posts.index', [

            //ceci nous permet de recuperer une variable posts qu'on pourra utiliser dans notre html pour faire une boucle et afficher nos posts
            'posts' => $posts,
        ]);
    }
}
