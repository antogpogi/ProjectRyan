<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Users;
use Session;
class LoginController extends Controller
{
    //
    public function index(){

    	return View('login.index');
    }

    public function login(Request $request){

    	$account = $request->only('username', 'password');
    	if(\Auth::attempt($account)){
    		Session::flash('success','The Account was successful.');
    	}
    	Session::flash('success','The Account was wrong.');
    	return redirect()->route('login');
    }
}
