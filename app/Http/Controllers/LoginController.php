<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
	public function index()
	{
		return view('login.index');
	}
	
	public function logout()
	{
		Auth::logout();
		return redirect('/login');
	}
	
	public function postLogin(Request $request)
	{
		$validated = $request->validate([
			'username' => 'required',
			'password' => 'required',
		]);
		
		if(Auth::attempt(["kode_user"=>$request->username, "password"=>$request->password]))
		{			
			return redirect('/admin');
		}
		else
		{
			return redirect()->back()->withErrors(['password' => ['Invalid Username and/or Password']]);
		}
	}
	
}
