<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show($articleId)
    {   
        return view('articles.show',[
            'article' => Article::findOrFail($articleId)
        ]);
    }

    public function index()
    {   
        return view('articles.index',[
            'articles' => Article::paginate(3)
        ]);
    }

    public function create()
    {   
        return view('articles.create');
    }

    public function store()
    {   
        // dd(request()->all());

        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();


        return redirect('/articles');
    }

    public function edit($articleId)
    {   
        $article =Article::findOrFail($articleId);
                
        return view('articles.edit',compact('article'));

    }

    public function update($articleId)
    {   
        // dd(request()->all());
        
        $article = Article::findOrFail($articleId);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/'.$articleId);
    }
}

