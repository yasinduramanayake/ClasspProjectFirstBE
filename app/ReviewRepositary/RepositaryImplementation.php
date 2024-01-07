<?php

namespace App\ReviewRepositary;

use App\ReviewRepositary\ReporitaryInterface;
use App\Models\Reviews;
use Spatie\QueryBuilder\QueryBuilder;

class RepositaryImplementation  implements ReporitaryInterface
{

    public function store($data)
    {
        $createddata =  Reviews::create($data);
        return  $createddata;
    }

    public function index()
    {
        $reviews = QueryBuilder::for(Reviews::class)
            ->allowedFilters(['rating'])
            ->get();

        return $reviews;
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
