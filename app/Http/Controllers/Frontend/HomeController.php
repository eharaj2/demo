<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Validator;
use Exception;
class HomeController extends Controller
{
    
    public function index(Request $request){
      $region_code = session()->get('region');
      $products = Product::where('region_code', $region_code)->get();

      return view("frontend.home", compact("products"));
    }

}