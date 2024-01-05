<?php

namespace App\CategoryRepository;



interface categoryinterface
{
    public function add($data);

    public function update($id, $data);

    public function index();

    public function delete($id);
}
