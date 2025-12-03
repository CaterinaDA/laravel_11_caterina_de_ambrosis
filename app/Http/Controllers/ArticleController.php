<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo creato con successo');
    }



    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => ['required'],
            'subtitle' => ['required'],
            'body' => ['required'],

        ]);

        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->route('article.show', $article)->with('success', 'Articolo aggiornato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Articolo eliminato con successo');
    }
}
