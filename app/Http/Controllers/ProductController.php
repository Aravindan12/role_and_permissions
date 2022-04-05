<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * added middleware for role has permission to access
     */
    public   function __construct()
    {
        $this->middleware('permission:add-product', ['only' => ['addProduct','insertProduct','productDelete']]);
    }
    /**
     * returning add product screen it can be accessed by user or admin who has add-product permission
     */
    public function addProduct(){
        return view('add_product');
    }
    /**
     * adding new product by only who has add-product permission
     */
    public function insertProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->save();
        return redirect()->route('product-list');
    }
    /**
     * Listing all product it can be accessed by all
     */
    public function productList(){
        $product = Product::all();
        return view('product_list',compact('product'));
    }
    /**
     * Delete product by only who has add-product permission
     */
    public function productDelete($id){
        Product::where('id',$id)->delete();
        return redirect()->route('product-list');
    }
}