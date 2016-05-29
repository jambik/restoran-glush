<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Gallery;
use App\Page;
use App\Settings;

class FrontendController extends Controller
{
    protected $settings = null;

    public function __construct()
    {
        // All categories
        $categories = Category::withDepth()->defaultOrder()->get()->toTree();
        view()->share('categories', $categories);

        // Gallery with id 1
        $firstGallery = Gallery::find(1);
        view()->share('firstGallery', $firstGallery);

        // Articles
        $mainArticles = Article::take(4)->get();
        view()->share('mainArticles', $mainArticles);

        // SubPages
        $pages = Page::all();
        view()->share('eventsPages', $pages->whereLoose('parent_id', 2));
        view()->share('aboutUsPages', $pages->whereLoose('parent_id', 9));

        // Settings
        $settings   = Settings::find(1);
        $this->settings = $settings;
        view()->share('settings', $settings);
    }
}
