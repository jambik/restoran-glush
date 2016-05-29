<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use App\Product;
use App\Recall;

class IndexController extends FrontendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::find(1);

        $productsPreview = Product::with('category')->take(15)->get();

        $recalls = Recall::where('approved', true)->orderBy('created_at', 'desc')->take(3)->get();

        return view('index', compact('page', 'productsPreview', 'recalls'));
    }
}
