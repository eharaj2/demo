<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function lang(Request $request){
        $lang = $request['lang'];
    	session()->put('locale', $lang);

    	App::setLocale($lang);

    	
    	return redirect()->to("./");
    }

    public function region(Request $request){
        $region = $request['region'];
    	session()->put('region', $region);    	
    	return redirect()->to("./");	
    }
}
