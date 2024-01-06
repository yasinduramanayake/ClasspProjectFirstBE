<?php

namespace App\UserRepository;

use App\Models\User;

class userimplementation implements userinterface{

    public function add($data)
    {
        return $createdata = User::create($data);
    }

    public function update($id, $data)
    {
        return $updatedata = $id->update($data);
    }

    public function index()
    {
        return $alldata = User::all();
    }

    public function delete($id)
    {
        return $deletetdata = $id->delete();
    }
    
}