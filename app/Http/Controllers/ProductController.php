<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public   function __construct()
    {
        $this->middleware('permission:add-product|insert-product|product-delete', ['only' => ['addProduct','insertProduct','productDelete']]);
    }

    
    public function addProduct(){
        return view('add_product');
    }

    public function insertProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->save();
        return redirect()->route('product-list');
    }

    public function productList(){
        $product = Product::all();
        return view('product_list',compact('product'));
    }

    public function productDelete($id){
        Product::where('id',$id)->delete();
        return redirect()->route('product-list');
    }
}