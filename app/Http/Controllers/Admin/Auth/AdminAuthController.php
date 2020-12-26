<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{
    //

    use AuthenticatesUsers;

    public $redirectTo = '/admin/dashboard';

    public function __construct(){
    	$this->middleware('admin.guest', ['except'=> 'logout']);
    }

    public function showLoginForm(){
    	return view('admin.auth.login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
