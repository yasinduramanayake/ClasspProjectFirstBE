<?php

namespace App\CategoryRepository;

use App\Models\Category;

class categoryimplementation implements categoryinterface
{

    public function add($data)
    {
        return $createdata = Category::create($data);
    }

    public function update($id, $data)
    {
        return $updatedata = $id->update($data);
    }

    public function index()
    {
        return $alldata = Category::all();
    }

    public function delete($id)
    {
        return $deletetdata = $id->delete();
    }
}
