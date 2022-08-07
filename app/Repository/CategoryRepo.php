<?php
namespace App\Repository;
use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepo implements CategoryInterface {

    public function index(){
        $categories= Category::get();
        return view('categories.index',compact('categories'));
    }
    public function store($request){
        Category::create($request->validated());
        return redirect()->route('category.index');
    }
    public function update(){
        dd(1);
    }
    public function delete($id){
        dd(1);
    }
}


?>