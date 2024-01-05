<?php

namespace App\UserRepository;

interface userinterface{

    public function add($data);

    public function update($id, $data);

    public function index();

    public function delete($id);

}