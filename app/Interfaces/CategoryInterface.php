<?php

namespace App\Interfaces;

interface CategoryInterface{

public function index();
public function store($request);
public function update($request);
public function delete($request);


}

?>