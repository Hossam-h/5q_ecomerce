<?php
namespace App\Repository;
use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepo implements CategoryInterface {

    protected $category;
    public function __construct(Category $category){

        $this->category=$category;
    }

    public function index(){
        $categories= Category::get();
        return view('categories.index',compact('categories'));
    }

    public function store($request){
        $this->category::create($request->validated());
        return redirect()->route('category.index');
    }

    public function update($request){
        $this->category::find($request->id)->update($request->validated());
        return redirect()->route('category.index');
    }

    public function delete($request){
        $this->category::find($request->id)->delete();
        return redirect()->route('category.index');
    }
}


?>