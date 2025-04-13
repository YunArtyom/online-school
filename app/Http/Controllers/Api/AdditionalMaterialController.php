<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdditionalMaterialFormRequest;
use App\Http\Requests\UpdateAdditionalMaterialFormRequest;
use App\Http\Resources\AdditionalMaterial\AdditionalMaterialListResource;
use App\Http\Resources\AdditionalMaterial\AdditionalMaterialResource;
use App\Models\AdditionalMaterial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class AdditionalMaterialController extends Controller
{
    public function directorList(): AnonymousResourceCollection
    {
        $materials = AdditionalMaterial::select(['id', 'name', 'description', 'link', 'price_usd', 'price_rub', 'price_won'])
            ->orderByDesc('created_at')->get();

        return AdditionalMaterialListResource::collection($materials);
    }

    public function directorShow(AdditionalMaterial $additionalMaterial): AdditionalMaterialResource
    {
        return new AdditionalMaterialResource($additionalMaterial);
    }

    public function store(CreateAdditionalMaterialFormRequest $request): JsonResponse
    {
        AdditionalMaterial::create($request->validated());

        return response()->json(status: 201);
    }

    public function update(UpdateAdditionalMaterialFormRequest $request, AdditionalMaterial $additionalMaterial): AdditionalMaterialResource
    {
        $additionalMaterial->update($request->validated());

        return new AdditionalMaterialResource($additionalMaterial);
    }

    public function destroy(AdditionalMaterial $additionalMaterial)
    {
        return response()->json('Данный материал куплен учениками, вы не можете его удалить!');

        //AdditionalMaterialPurchase
        $additionalMaterial->delete();

        return response()->json();
    }

//    public function studentBoughtList(): JsonResponse
//    {
//        $materials = AdditionalMaterial::all();
//
//        return response()->json($materials);
//    }
//
//    public function studentCanBuyList(): JsonResponse
//    {
//        AdditionalMaterialPurchase::where('material_id', $value)->where('user_id', auth()->id())->firstOrFail();
//
//        $materials = AdditionalMaterial::all();
//
//        return response()->json($materials);
//    }

//    public function studentBoughtShow(AdditionalMaterial $additionalMaterial): AdditionalMaterialEditResource
//    {
//        return new AdditionalMaterialEditResource($additionalMaterial);
//    }
//
//    public function studentCanBuyShow(AdditionalMaterial $additionalMaterial): AdditionalMaterialEditResource
//    {
//        return new AdditionalMaterialEditResource($additionalMaterial);
//    }

}
