<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
    public function getAllArticles(){
        $articles = Article::all();
        return view('home', compact('articles'));
    }
}
