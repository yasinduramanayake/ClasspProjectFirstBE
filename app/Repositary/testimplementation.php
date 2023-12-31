<?php

namespace App\Repositary;
use App\Repositary\testinterface;
use App\Models\User;

class testimplementation implements testinterface
{
    public function store($data){
        $createddata= User::create($data);
        return $createddata;

    }

    public function index(){
        $alltestdata=User::all();
        return $alltestdata;

    }

}
