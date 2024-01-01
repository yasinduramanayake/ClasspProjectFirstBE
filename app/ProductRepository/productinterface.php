<?php

namespace App\ProductRepository;

interface productinterface
{
    public function add($data);

    public function update($id,$data);

    public function index();

    public function delete($id);
}
