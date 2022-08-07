<?php

namespace App\Repository;
use App\Interfaces\ProductInterface;
use App\Models\Category;
use App\Models\Product;

class ProductRepo implements ProductInterface{

public function index(){
    $products= Product::get();
    return view('Products.index',compact('products'));
}
public function store($request){

}
public function update($request){

}
public function delete($request){

}


}

?>