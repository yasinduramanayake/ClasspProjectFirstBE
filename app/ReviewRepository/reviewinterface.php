<?php

namespace App\ReviewRepository;

interface reviewinterface
{
    public function add($data);

    public function update($id, $data);

    public function index();

    public function delete($id);
}
