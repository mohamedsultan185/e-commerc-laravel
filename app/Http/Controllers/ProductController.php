<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // $categories = Category::all();

        return view('admin.products.products', compact('products' ));
    }

    public function create()
    {
         $categories = Category::all();

        return view('admin.products.addProducts ',compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the input here if required
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('admin.products.editproducts', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate the input here if required
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
