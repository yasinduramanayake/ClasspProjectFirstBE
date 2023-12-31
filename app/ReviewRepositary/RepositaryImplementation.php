<?php

namespace App\ReviewRepositary;

use App\ReviewRepositary\ReporitaryInterface;
use App\Models\Reviews;


class RepositaryImplementation  implements ReporitaryInterface
{

    public function store($data)
    {
        $createddata =  Reviews::create($data);
        return  $createddata;
    }

    public function index()
    {
        $reviews =  Reviews::all();
        return  $reviews;
    }

    public function update($id, $data)
    {
        $updateddata =  $id->update($data);
        return    $updateddata;
    }


    public function delete($id)
    {
        $id->delete();
    }
}
