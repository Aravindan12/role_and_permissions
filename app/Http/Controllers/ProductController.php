<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
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
     * added policy while insert a record in db to check admin is creating else abort
     */
    public function insertProduct(Request $request){
        if ($request->user()->can('create',Product::class)) {
            $product = new Product();
            $product->user_id = Auth::id();
            $product->name = $request->name;
            $product->detail = $request->detail;
            $product->save();
            return redirect()->route('product-list');
        }else{
            abort(403);
        }
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
    /**
     * View product by only who has add-product permission
     * Added a policy while showing a single product can able to see only the product added by the user
     */
    public function show($id){
        // get current logged in user
        $user = Auth::user();
        
        // load product
        $product = Product::find($id);
      
        if ($user->can('view', $product)) {
            return view('single_product_list',compact('product'));
        }else{
            abort(403);
        }
    }
}