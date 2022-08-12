<?php

namespace App\Repository;
use App\Interfaces\ProductInterface;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;

use App\Http\Traits\FileUploadTrait;
use Cart;
class ProductRepo implements ProductInterface{


    use FileUploadTrait;

  protected $Product;
    public function __construct(Product $Product){

        $this->Product=$Product;
    }

public function index(){
    $products=  $this->Product::get();
    return view('Products.index',compact('products'));
}
public function store($request){

    
    if ($request->hasFile('photo')) {

        $fileName = $this->uploadFile($request->photo, 'uploads/products/');
    }

    $this->Product::create([
        'description' => [
            'ar' => $request->description,
            'en' => $request->description_ar
         ],
            'name'=>$request->name,
            'name_ar'=>$request->name_ar,
            'price'=>$request->price,
            'stock'=>$request->units,
            'discount'=>$request->discount,
            'category_id'=>$request->category,
            'image'=>isset($fileName) ? 'uploads/products/' . $fileName : null,
        ]);

return redirect()->route('product.index');
}


public function create(){
    $categories= Category::get();
    return view('Products.Add',compact('categories'));
}


public function edit($id){
 

    $categories= Category::get();

    $product=Product::find($id);
    return view('Products.edit',compact('categories','product'));
}

public function update($request){



    $product=$this->Product::find($request->id);

    if ($request->hasFile('photo')) {
         $product=$this->Product::find($request->id);  
        if($product->image){
            unlink($product->image);
        }
        
        $fileName = $this->uploadFile($request->photo, 'uploads/products/');
        
   

    }

    $product->update([
        
        'description' => [
            'ar' => $request->description,
            'en' => $request->description_ar
         ],
            'name'=>$request->name,
            'name_ar'=>$request->name_ar,
            'price'=>$request->price,
            'stock'=>$request->units,
            'discount'=>$request->discount,
            'category_id'=>$request->category,
            'image'=>isset($fileName) ? 'uploads/products/' . $fileName : $product->image,
        ]);

        return redirect()->route('product.index');

}
public function delete($request){

    $product=$this->Product::find($request->id);
    if($product->image){
        unlink($product->image);
    }
     $product->delete();
     return redirect()->route('product.index');

}


public function detail($id){

    $product=$this->Product::find($id);
    $cart = Cart::content();
    $Reviews=$product->reviews->take(5);
   // dd($Reviews);
    return view('product_detail',compact('product','cart','Reviews'));

}


}

?>