<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	$products = DB::table('products')->get(); 
    	return view('product', ['products'=>$products]);
  }
}