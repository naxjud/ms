<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {   
        return view('articles.show',[
            'article' => $article
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

        // $validatedAttributes = request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);
        
        // // return $validatedAttributes;

        // Article::create($validatedAttributes);

        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {   
               
        return view('articles.edit',compact('article'));

    }

    public function update(Article $article)
    {   
        // dd(request()->all());

        $article->update($this->validateArticle());
        
        return redirect('/articles/'.$article->id);
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}

