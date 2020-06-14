<?php

namespace App\Http\Controllers\Api;

use App\API\ApiError;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return response()->json($this->product->paginate(10));
    }

    public function show(Product $id)
    {
        $data = ['data' => $id];
        return response()->json($data);
    }

    public function create(Request $request)
    {
        try {
            $productData = $request->all();
            $this->product->create($productData);

            $returnMessage = ['data' => ['msg' => 'Product created successfully!']];
            return response()->json($returnMessage, 201);
        } catch (\Exception $ex) {
            if (config('app.debug')) {
                return response()->json(ApiError::errorMessage($ex->getMessage(), 8181));
            }
            return response()->json(ApiError::errorMessage('An error occurs in creation!', 8181));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $productData = $request->all();
            $product = $this->product->find($id);
            $product->update($productData);

            $returnMessage = ['data' => ['msg' => 'Product updated successfully!']];
            return response()->json($returnMessage, 201);
        } catch (\Exception $ex) {
            if (config('app.debug')) {
                return response()->json(ApiError::errorMessage($ex->getMessage(), 8181));
            }
            return response()->json(ApiError::errorMessage('An error occurs in creation!', 8181));
        }
    }
}
