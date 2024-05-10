<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category)
    {
        $products=Product::where('category_id',$category)->get();
        return view('shop',['products'=>$products]);
    }


    public function show(string $id)
    {
        $product=Product::find($id);
        $related_products = Product::where('category_id', $product->category_id)
        ->where('id', '!=', $product->id)->get();
        
        return view('product',['product'=>$product],['related_products'=>$related_products]);
    }
    public function getAllProducts(){
        $products=Product::all();
        return view('products',['products'=>$products]);

    }
}
