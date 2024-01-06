<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\ProductRepository\productinterface;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productinterface;

    public function __construct(productinterface $productinterface)
    {
        $this->productinterface = $productinterface;
    }
    // to a product
    public function add(Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'name' => 'required|string',
                    'price' => 'required|integer',
                    'description' => 'string',
                    'imageurl' => 'string',
                    'category_id'=> 'required|integer'
                ]
            );

            $createddata = $this->productinterface->add($data);
            return response()->json(['data' => $createddata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // to update a product

    public function update(Product $id, Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'name' => 'string',
                    'price' => 'integer',
                    'description' => 'string',
                    'imageurl' => 'string',
                ]
            );

            $updateData = $this->productinterface->update($id, $data);

            return response()->json(['data' => $updateData]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // to view all products

    public function index()
    {
        try {
            $alldata = $this->productinterface->index();
            return response()->json(['data' => $alldata]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // to delete product

    public function delete(Product $id)
    {
        try {
            $deletetData = $this->productinterface->delete($id);
            return response()->json(['data' => $deletetData]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
