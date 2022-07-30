<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Material;

class LinkController extends Controller
{
    public function store(Request $request)
    {        
        $link = $request->validateWithBag('linkCreate',[
            'name' => 'string|nullable',
            'link' => 'required|string'
        ]);
        $material = Material::find($request['material_id']);
       
        $material->links()->updateOrCreate($link);

        return redirect()->route('materials.show', $material->id);
    }

    public function edit(Request $request)
    {
        $link = Link::find($request['id']);

        return view('link.edit', compact('link'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validateWithBag('linkUpdate',
            [
                'name' => 'string|nullable',
                'link' => 'required|string'

            ]);
        $link = Link::find($id);
        $link->update($data);
        return redirect()->route('materials.show', $link->material->id);
    }

    public function destroy($id)
    {
        $link = Link::find($id);
        Link::destroy($id);

        return redirect()->route('materials.show', $link->material_id);
    }
}
