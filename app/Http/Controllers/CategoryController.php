<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = $request->validate([
            'name' => 'string'
        ]);
        
        Category::create($category);

        return redirect()->route('categories.index');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'name' => 'string'
            ]);

        $category = Category::find($id);
    
        $category->update($validated);

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        
        return redirect()->route('categories.index');
    }
}
