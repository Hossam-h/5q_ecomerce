<?php
namespace App\Repository;
use App\Interfaces\CategoryInterface;

class CategoryRepo implements CategoryInterface {

    public function index(){
        return view('categories.index');
    }
    public function store(){
        dd(1);
    }
    public function update(){
        dd(1);
    }
    public function delete(){
        dd(1);
    }
}


?>