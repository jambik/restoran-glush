<?php

namespace App\Http\Controllers;

use App\Gallery;

class GalleriesController extends FrontendController
{
    /**
     * Display catalog index page.
     *
     * @return Response
     */
    public function index()
    {
        $galleries = Gallery::all();

        return view('galleries.index', compact('galleries'));
    }

    /**
     * Display category page.
     *
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $item = Gallery::findBySlugOrFail($slug);

        return view('galleries.show', compact('item'));
    }
}