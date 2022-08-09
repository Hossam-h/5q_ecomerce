<?php

namespace App\Interfaces;

interface ProductInterface{

public function index();
public function store($request);
public function update($request);
public function delete($request);
public function create();
public function edit($id);
public function detail($id);

}

?>