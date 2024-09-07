<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();

        // dd($products);
         

        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(SaveProductRequest $request)
    {

        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product);

    }

    public function show(Product $product)
    {
        // $product = Product::findOrFail($id);                        
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('products.show', $product);
    }
}
