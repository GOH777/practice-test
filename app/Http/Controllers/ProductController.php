<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('buyer')->get();
        return view('products.index',['products'=>$products]);
    }

    public function create()
    {
        $buyers = Buyer::get();
        return view('products.create', ['buyers'=>$buyers]);
    }

    public function store(Request $request)
{
  
    
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'status' => 'required|string|in:on_the_way,on_storage,sold', 
        'price' => 'required|int|max:255',
        'buyer_id' => 'required|int|max:255',
        'seller' => 'required|string|max:255',
    ]);

   
    Product::create($validated);
   
    return redirect()->route('products.index');
  
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
