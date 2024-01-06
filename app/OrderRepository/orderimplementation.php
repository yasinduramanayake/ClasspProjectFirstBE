<?php

namespace App\OrderRepository;

use App\Models\Orders;

class orderimplementation implements orderinterface
{

    public function add($data)
    {
        return $createdata = Orders::create($data);
    }

    public function update($id, $data)
    {
        return $updatedata = $id->update($data);
    }

    public function index()
    {
        return $alldata = Orders::all();
    }

    public function delete($id)
    {
        return $deletetdata = $id->delete();
    }
}
