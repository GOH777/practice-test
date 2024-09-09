<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'status' => 'required|string|in:on_the_way,on_storage,sold', 
        'buyer' => 'required|string|max:255',
        'seller' => 'required|string|max:255',
    ]);
    Product::create($validated);
    try {
        
       Product::create($validated);

        
        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    } catch (\Exception $e) {
        
        return redirect()->back()
                         ->withErrors('An error occurred while creating the product. Please try again.');
    }
}


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'buyer' => 'required|string|max:255',
            'seller' => 'required|string|max:255',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}