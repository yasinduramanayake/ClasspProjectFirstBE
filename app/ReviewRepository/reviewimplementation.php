<?php

namespace App\ReviewRepository;

use App\Models\Reviews;

class reviewimplementaion implements reviewinterface
{

    public function add($data)
    {
        return $createdata = Reviews::create($data);
    }

    public function update($id, $data)
    {
        return $updatedata = $id->update($data);
    }

    public function index()
    {
        return $alldata = Reviews::all();
    }

    public function delete($id)
    {
        return $deletetdata = $id->delete();
    }
}
