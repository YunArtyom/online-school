<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdditionalMaterialFormRequest;
use App\Models\AdditionalMaterial;


class AdditionalMaterialController extends Controller
{
    public function index()
    {
        $materials = AdditionalMaterial::all();

        return response()->json($materials);
    }

    public function show($id)
    {
        $material = AdditionalMaterial::findOrFail($id);

        return response()->json($material);
    }

    public function store(AdditionalMaterialFormRequest $request)
    {
        $material = AdditionalMaterial::create($request->validated());

        return response()->json($material, 201);
    }

    public function update(AdditionalMaterialFormRequest $request, $id)
    {
        $material = AdditionalMaterial::findOrFail($id);
        $material->update($request->validated());

        return response()->json($material);
    }

    public function destroy($id)
    {
        $material = AdditionalMaterial::findOrFail($id);
        $material->delete();

        return response()->json(null, 204);
    }
}
