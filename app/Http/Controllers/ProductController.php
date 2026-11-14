<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('products')->orderBy('name')->get();

        $query = Product::with('category')->latest();

        if ($request->filled('kategori')) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $request->query('kategori')));
        }

        $products = $query->paginate(9)->withQueryString();

        $activeCategory = $request->query('kategori');

        return view('products.index', compact('products', 'categories', 'activeCategory'));
    }

    public function show(Product $product)
    {
        $product->load('category');

        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(3)
            ->get();

        return view('products.show', compact('product', 'related'));
    }
}
