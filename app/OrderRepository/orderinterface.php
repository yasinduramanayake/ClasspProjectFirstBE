<?php

namespace App\OrderRepository;

interface orderinterface
{
    public function add($data);

    public function update($id, $data);

    public function index();

    public function delete($id);
}
