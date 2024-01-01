<?php

namespace App\CategoryRepository;


interface categoryinterface
{

    public function store($data);
    public function getallcategory();
    public function updatecategory($id, $data);
    public function deletecategory($id);
   

}