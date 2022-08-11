<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      //  dd(Cart::content());
        $products=Product::all();
        $products_latest=Product::latest()->take(6)->get();
        $products_latest3=Product::take(3)->get();

        $OnCat_Fst=Category::with('products')->first();

       $Category_Fst=Category::with('products')->latest()->take(2)->get();

        return view('welcome',compact('products','products_latest','Category_Fst','OnCat_Fst','products_latest3'));
    }
}
