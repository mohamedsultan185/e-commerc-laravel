<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.addcategory');
    }

    public function store(Request $request)
    {
        // Validate the input here if required
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.editcategory', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validate the input here if required
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
