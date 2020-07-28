<?php 

namespace App\Controllers;
/**
 * 
 */
class PagesController
{
	public static function index()
	{
		return view('index');
	}

	public function login()
	{
		return view('login'); 
	}

	public function register()
	{
		return view('register');
	}
}