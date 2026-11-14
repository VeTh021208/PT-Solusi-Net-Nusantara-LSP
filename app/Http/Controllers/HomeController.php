<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->orderBy('name')->take(6)->get();

        $featuredProducts = Product::with('category')
            ->where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        if ($featuredProducts->count() < 6) {
            $extra = Product::with('category')
                ->whereNotIn('id', $featuredProducts->pluck('id'))
                ->latest()
                ->take(6 - $featuredProducts->count())
                ->get();

            $featuredProducts = $featuredProducts->concat($extra);
        }

        $galleries = Gallery::latest()->take(4)->get();

        return view('home', compact('categories', 'featuredProducts', 'galleries'));
    }
}
