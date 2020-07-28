<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Middlewares\Auth;
use App\Middlewares\Session;
/**
 * 
 */
class AdminController extends Admin
{
	
	public function getLogin()
	{
		return view("/admin/login");
	}

	public function login()
	{
		$query = $this->permit(Auth::validate(
			[
				'email' => $_POST['email'],
				'password' => $_POST['password']
			],
			"/admin/login"
		));

		if (count($query) > 0) 
		{
			Session::set('email', $_POST['email']);
			redirect("/admin/home");
		}
		else{
			echo "Something went wrong!";
		}
	}

	public function logout()
	{
		Session::destroy('email', 'login');
	}

	public function home()
	{
		Session::get('email', 'login');

		return view("/admin/home", [
			'title' => 'Users List',
			'users' => $this->showAll()
		]);
	}

	public function edit_user($id)
	{
		Session::get('email', 'login');

		if (isset($id) ) {
			return view("/admin/edit_user", [
				'title' => 'Update User',
				'user' => $this->find($id)
			]);
		}

		die("404 Page Not Found");
	}

	public function update_user($id)
	{
		Session::get('email', 'login');
		
		$query = (new User)->update(Auth::validate(
			[
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'username' => $_POST['username'],
				'gender' => $_POST['gender'],
				'institution' => $_POST['institution'],
				'address' => $_POST['address'],
				'password' => $_POST['password']
			],
			"/admin/edit_user"
		), $id);

		if ($query > 0) 
		{
			return view("/admin/home", [
				'success' => "Record Updated Successfully!", 
				'users' => $this->showAll()
			]);
		}

		die("404 Page Not Found");
	}

	public function create_user()
	{
		Session::get('email', 'login');

		return view("/admin/create_user", [
			'title' => 'Create New User'
		]);
	}

	public function store_user()
	{
		Session::get('email', 'login');

		$query = (new User)->create(Auth::validate(
			[
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'username' => $_POST['username'],
				'institution' => $_POST['institution'],
				'address' => $_POST['address'],
				'password' => $_POST['password']
			],
			"/admin/create_user"
		));

		if ($query > 0) 
		{
			return view("/admin/home", [
				'success' => "Record Added Successfully!", 
				'users' => $this->showAll()
			]);
		}
		else{
			echo "Something went wrong!";
		}
	}

	public function delete_user($id)
	{
		Session::get('email', 'login');

		$query = (new User)->delete($id);

		if ($query > 0) 
		{
			return view("/admin/home", [
				'success' => "Record Deleted Successfully!", 
				'users' => $this->showAll()
			]);
		}
	}
}