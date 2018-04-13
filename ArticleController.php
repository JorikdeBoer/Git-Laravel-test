<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Article;

class ArticleController extends Controller
{
public function create()
   {
     return view('articles.create_article');
   }

   public function show($id)
	{
		$article= Article::findOrFail($id);
	    return view('articles.article', compact('article'));
	}

    public function store(Request $request)
	{
        // Create a new article/blog
            $request->validate([
                    'user_name' => 'required',
                    'title'  => 'required',
                    'description'  => 'required'
                ]);
            $article = Article::create(request(['user_name', 'title', 'description']));

    $articles = Article::get();
    return view('articles.index', compact('articles'));
    }

    public function index()
    {
    $articles = Article::get();
    return view('articles.index', compact('articles'));
    }
}
