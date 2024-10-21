<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Récupère tous les articles
        return view('articles.index', compact('articles')); // Passe les articles à la vue
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail(); // Récupère l'article par slug
        return view('articles.show', compact('article')); // Passe l'article à la vue
    }
}
