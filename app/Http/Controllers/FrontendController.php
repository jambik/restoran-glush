<?php

namespace App\Http\Controllers;

use App\Category;
use App\Settings;

class FrontendController extends Controller
{
    protected $settings = null;

    public function __construct()
    {
        $categories = Category::withDepth()->defaultOrder()->get()->toTree();
        $settings   = Settings::find(1);

        $this->settings = $settings;

        view()->share('categories', $categories);
        view()->share('settings', $settings);
    }
}
