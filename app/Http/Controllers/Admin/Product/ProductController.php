<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Validator;
use Exception;
class ProductController extends Controller
{
    // Show All Product List

	public function index(Request $request){
		$products = Product::get();

		return view('admin.product.index', compact('products'));

	}


	/// Show product Add Form 
    public function addProduct(){
    	return view('admin.product.addProduct');
    }


    //// Save product details
    public function add(Request $request){

    try {
    		
	    	$request->validate([
	    		'slug' => 'required',
	    		'price' => 'required|numeric',
	    		'stock' => 'required|numeric',
	    		'image' => 'required|mimes:jpg,png,jpeg',
	    		'region_code' => 'required',
	    	]);

	    	$insert['slug'] = $request['slug'];
	    	$insert['title'] = json_encode($request['title'], true);
	    	$insert['price'] = $request['price'];
	    	$insert['stock'] = $request['stock'];
	    	$insert['region_code'] = $request['region_code'];

	    	if ($files = $request->file('image')) {
	           $destinationPath = 'public/images/'; // upload path
	           $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
	           $files->move($destinationPath, $profilefile);
	           $insert['image'] = "$profilefile";
	        }

	        $res = Product::insertGetId($insert);

	        return redirect()->back()->withSuccess("Record has been saved");

        } catch (Exception $e) {
    		return redirect()->back()->withError($e->getMessages());
    	}	

    }

}
