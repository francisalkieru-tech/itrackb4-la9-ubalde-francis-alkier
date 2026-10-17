<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->query('category', '');
        $stock = $request->query('stock', '');

        $products = Product::all();

        if($category){
            $products = $products->where('category', $category);
        }

        if($stock && $stock !== 'all'){
            $products = $stock === 'low'
            ? $products->where('stock', '<', 10) : $products->where('stock', '>=', 10);
        }

        return view('products.index', compact('products', 'category', 'stock'));
    }
    
    //return view('products.index', ['products' => $this->products()]);

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric|min:1|max:1000',
            'stock' => 'required|numeric|max:100',
            'category' => 'required|in:Canned Goods,Instant Noodles,Beverages,Alcoholic Beverages,Snacks'
        ]);
        Product::create($validated);

        return redirect()
        ->route('products.index')
        ->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $product = Product::findOrFail($id);
         return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


