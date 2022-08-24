<?php 

namespace App\Controllers;

use App\Models\User;
use App\Middlewares\Auth;
use App\Middlewares\Session;
/**
 * 
 */
class UsersController extends User
{
	
	public function login()
	{
		return view("login");
	}

	public function signin()
	{
		$query = $this->permit(Auth::validate(
			[
				'email' => $_POST['email'],
				'password' => $_POST['password']
			],
			"login"
		));

		if (count($query) > 0) 
		{
			Session::set('email', $query['email']);
			redirect("home");
		}
		else{
			echo "Something went wrong!";
		}
	}

	public function register()
	{
		return view("register");
	}

	public function store()
	{	
		$query = $this->create(Auth::validate(
			[
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'username' => $_POST['username'],
				'gender' => $_POST['gender'],
				'institution' => $_POST['institution'],
				'address' => $_POST['address'],
				'password' => $_POST['password']
			],
			"register"
		));

		if ($query > 0) 
		{
			return view("login", [
				'success' => "Congratulation {$_POST['name']}, you can now login!" 
			]);
		}
		else{
			echo "Something went wrong!";
		}
	}

	public function logout()
	{
		Session::destroy('email', 'home');
	}

	public function home()
	{
		Session::get('email', 'login');
		
		return view("index", [
			'title' => '',
		]);
	}
}
