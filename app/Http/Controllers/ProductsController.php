<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;


class ProductsController extends Controller
{
// ProductsController.php

public function index()
{
    $listeproduits = Product::take(3)->get();
    // $list = Product::all();
    return view('Home', compact('listeproduits'));
    // return view('products', compact('list'));

}
public function index_2()
{
    $list = Product::all();
    return view('products', compact('list'));
}

public function fetchProductDetails($id)
{
    $product = Product::find($id);
    return view('product-detail', compact('products'));
}
}
