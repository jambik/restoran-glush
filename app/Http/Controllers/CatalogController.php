<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;

class CatalogController extends FrontendController
{
    /**
     * Display catalog index page.
     *
     * @return Response
     */
    public function index()
    {
        $page = Page::findBySlug('catalog');

        return view('catalog.index', compact('page'));
    }

    /**
     * Display category page.
     *
     * @param $slug
     * @return Response
     */
    public function category($slug)
    {
        $category = Category::findBySlugOrFail($slug);
        $descendants = $category->descendants()->get();
        $children = $descendants->whereLoose('parent_id', $category->id);

        $products = Product::whereIn('category_id', $descendants->pluck('id')->push($category->id)->toArray())->get();

        return view('catalog.category', compact('category', 'children', 'products'));
    }

    /**
     * Display product page.
     *
     * @param $slug
     * @return Response
     */
    public function product($slug)
    {
        $product = Product::findBySlugOrIdOrFail($slug);
        $category = $product->category;

        $sameProductsCount = 3;
        $sameProducts      = Product::all();
        $sameProducts      = $sameProducts->random($sameProducts->count() < $sameProductsCount ? $sameProducts->count() : $sameProductsCount);

        return view('catalog.product', compact('category', 'product', 'sameProducts'));
    }

    /**
     * Display product page.
     *
     * @param $slug
     * @return Response
     */
    public function productPopup($slug)
    {
        $product = Product::findBySlugOrIdOrFail($slug);

        return view('catalog.product_popup', compact('product'));
    }
}