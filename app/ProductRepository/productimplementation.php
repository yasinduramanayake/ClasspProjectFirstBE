<?php

namespace App\ProductRepository;

use App\Models\Product;

class productimplementaion implements productinterface
{

    public function add($data)
    {
        return $createdata = Product::create($data);
    }

    public function update($id, $data)
    {
        return $updateData = $id->update($data);
    }

    public function index()
    {
        return $alldata = Product::all();
    }

    public function delete($id)
    {
        return $deletetData = $id->delete();
    }
}
