<?php

namespace App\ProductRepository;

use App\Models\Product;

class productimplementation implements productinterface
{

    public function add($data)
    {
        return $createdata = Product::create($data);
    }

    public function update($id, $data)
    {
        return $updatedata = $id->update($data);
    }

    public function index()
    {
        return $alldata = Product::all();
    }

    public function delete($id)
    {
        return $deletetdata = $id->delete();
    }
}
