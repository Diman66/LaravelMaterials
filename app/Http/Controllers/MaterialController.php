<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Type;
use phpDocumentor\Reflection\Types\Nullable;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::with(['category','type', 'tags'])->get();
     
        return view('material.index', compact('materials'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!empty($search)) {
            $materials = Material::where('name', 'LIKE', "%{$search}%")
                            ->orWhere('autor', 'LIKE', "%{$search}%")
                            ->orWhereRelation('category', 'name', 'LIKE', "%{$search}%")
                            ->orWhereRelation('type', 'name', 'LIKE', "%{$search}%")
                            ->orWhereRelation('tags', 'name', 'LIKE', "%{$search}%")
                            ->get();
            return view('material.index', compact('materials'));
        } else {
            return redirect()->route('materials.index');
        };
    }

    public function create()
    {
        $categories = Category::all();
        $types = Type::all();
        
        return view('material.create', compact('categories', 'types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'autor' => 'required',
            'description' => 'string|nullable',
            'type_id'=> 'required',
            'category_id' => 'required'
        ]);

        Material::create($validated);

        return redirect()->route('materials.index'); 
    }

    public function show(Material $material)
    {
      
        $tags = Tag::all();
        return view('material.view', compact('material', 'tags'));
    }

    public function edit(Material $material)
    {
        $types = Type::all();
        $categories = Category::all();
        return view('material.edit', compact('material', 'types', 'categories'));
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('patch')) {
            $validated = $request->validate([
            'name' => 'required',
            'autor' => 'required',
            'description' => 'string|nullable',
            'type_id'=> 'required',
            'category_id' => 'required'
            ]);
            Material::where('id', $id)
                    ->update($validated);
        } else {
            $validated = $request->validate([
                'tag_id' => 'required',
            ]);
            $material = Material::find($id);
            $material->tags()->syncWithoutDetaching($validated);

            return redirect()->route('materials.show', $id);
        }
        
        return redirect()->route('materials.index');
    }

    public function destroy($id)
    {
        Material::destroy($id);
        return redirect()->route('materials.index');
    }

    public function destroyTag(Request $request, $id)
    {
        $material = Material::find($id);
        $material->tags()->detach($request->tag_id);
        return redirect()->route('materials.show', $id);
    }

}
