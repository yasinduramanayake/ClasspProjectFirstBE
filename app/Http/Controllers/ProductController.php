<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // to a product
    public function add(Request $request)
    {

        $data = $request->validate(
            [
                'name' => 'required|string',
                'price' => 'required|integer',
                'description' => 'string',
                'imageurl' => 'string',
            ]
        );

        $createddata = Product::create($data);
        return response()->json(['data' => $createddata]);
    }

    // to update a product

    public function update(Product $id, Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'string',
                'price' => 'integer',
                'description' => 'string',
                'imageurl' => 'string',
            ]
        );
        $updateData = $id->update($data);
        return response()->json(['data' => $updateData]);
    }

    // to view all products

    public function index()
    {
        $alldata = Product::all();
        return response()->json(['data' => $alldata]);
    }

    // to delete product

    public function delete(Product $id)
    {
        $deletetData = $id->delete();
        return response()->json(['data' => $deletetData]);
    }
}
