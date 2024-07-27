<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\ProductType;
use App\Http\Resources\ProductTypeResource;

class ProductTypeController extends Controller
{
    public function index()
    {
        return ProductTypeResource::collection(ProductType::all());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:product_types,name',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status"    => "error",
                "message"   => "Type product created failed",
                "errors"    => $validator->errors()
            ], 422);
        }

        $new_type = new ProductType();
        $new_type->name = $request->input('name');
        $new_type->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Type product created successfully',
            'data'      => [
                "id"    =>  $new_type->id,
                "name"    =>  $new_type->name,
                "updated_at"    =>  $new_type->updated_at,
                "created_at"    =>  $new_type->created_at,
            ]
        ], 201);
    }

    public function show(string $id)
    {
        $type = ProductType::find($id);

        if (is_null($type)) {
            return response()->json([
                'status'    => 'success',
                'message'   => 'Type with ID `'.$id.'` not found.',
            ], 404);
        }
    
        return new ProductTypeResource($type);
    }

    public function update(Request $request, string $id)
    {
        $type = ProductType::find($id);

        if (is_null($type)) {
            return response()->json([
                'status' => 404,
                'message' => 'Type with ID `'.$id.'` not found.',
            ], 404);
        }


        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:product_types,name',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Type updated failed',
                'errors'      => $validator->errors()
            ]);
        }

        $type->name = $request->input('name');
        $type->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Type product updated successfully',
            'data'      => new ProductTypeResource($type)
        ], 200);

    }

    public function destroy(string $id)
    {
        $type = ProductType::find($id);

        if (is_null($type)) {
            return response()->json([
                'status'    => 'failed',
                'message'   =>'Type product delete failed',
                'errors'   => 'Type product not found',
            ], 404);
        }

        $type->delete();
        return response()->json([
            'status'    => 'success',
            'message'   => 'Type product delete successfully',
        ], 200);
    }
}
