<?php

namespace App\ReviewRepositary;



interface  ReporitaryInterface
{
    public function store($data);

    public function index();

    public function update($id, $data);

    public function delete($id);
}
