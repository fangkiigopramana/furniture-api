<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\ProductType; 

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return [
            "status" => 201,
            "datas" => ProductResource::collection($products)
        ];
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'type' => 'required|exists:type_products,name',
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'price' => 'required',
            'img_link' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Product created failed',
                'errors'    => $validator->errors()
            ], 422);
        }

        $new_product = new Product();
        $new_product->type_id = ProductType::select('id')->where('name', $request->input('type'))->first()->id;
        $new_product->name = $request->input('name');
        $new_product->description = $request->input('description');
        $new_product->price = $request->input('price');
        $new_product->img_link = $request->input('img_link');
        $new_product->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Product created successfully',
            'data'      => new ProductResource($new_product)
        ]);
    }

    public function show(string $id)
    {
        $product = Product::find($id);

        if (is_null($product)) {
            return response()->json([
                'status' => 404,
                'error' => 'Product with ID `'.$id.'` not found.',
            ], 404);
        }
        return new ProductResource($product);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if (is_null($product)) {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Product update failed',
                'errors'    => 'Product not found'
            ], 404);
        }

        $validator = Validator::make($request->all(),[
            'type' => 'exists:type_products,name',
            'name' => 'unique:products,name',
            'description' =>'required',
            'price' =>'required',
            'img_link' =>'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
               'status'    => 'failed',
               'message'   => 'Product updated failed',
                'errors'    => $validator->errors()
            ], 422);
        }

        $product->type_id = ProductType::select('id')->where('name', $request->input('type'))->first()->id;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->img_link = $request->input('img_link');
        $product->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Product updated successfully',
            'data'      => new ProductResource($product)
        ]);
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (is_null($product)) {
            return response()->json([
                'status'    => 'failed',
                'message'   => 'Product deleted failed',
                'errors'    => 'Product not found'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Product deleted succesfully'
        ]);
    }
}
