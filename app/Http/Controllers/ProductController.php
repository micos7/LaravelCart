<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Http\Requests;

class ProductController extends Controller
{
    public function getIndex()
    {
      $products = Product::all();
      return view('shop.index',[
        'products' => $products
      ]);
    }
}
