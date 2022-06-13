<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('products')->get();

        return view('products', [ 'categories' => $categories ]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('add_product', [ 'categories' => $categories ]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|numeric',
            'active' => 'required|boolean',
        ]);

        $product = Product::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'active' => $validatedData['active']
        ]);

        $category = Category::findOrFail($validatedData['category']);

        // Laravel 9.x: syncWithPivotValues($ids, array $values, bool $detaching = true)
        // Explicitly set the third argument to false to prevent earlier entries from being detached.
        $category->products()->syncWithPivotValues([ $product->id ], [ 'active' => $validatedData['active'] ], false);

        return redirect()->route('products.index')->with('success', $product->name . ' has been added to ' . $category->name . '.');
    }
}
