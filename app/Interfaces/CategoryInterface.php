<?php

namespace App\Interfaces;

interface CategoryInterface{

public function index();
public function store($request);
public function update();
public function delete($id);


}

?>