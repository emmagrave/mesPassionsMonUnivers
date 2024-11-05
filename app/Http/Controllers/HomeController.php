<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(2)->get();
        // Les 4 articles suivants, excluant les 2 derniers
        //$articles_recents = Article::latest()->skip(2)->take(4)->get();
        $articlesRecents = Article::latest()->take(4)->get();
        return view('home', compact('articles','articlesRecents'));
    }
}
