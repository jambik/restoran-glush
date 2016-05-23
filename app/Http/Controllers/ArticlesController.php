<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends FrontendController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $item = Article::findBySlugOrFail($slug);

        return view('articles.show', compact('item'));
    }
}
