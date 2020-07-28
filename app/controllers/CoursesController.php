<?php 

namespace App\Controllers;

use App\Models\Course;
use App\Models\Question;
use App\Middlewares\Auth;
use App\Middlewares\Session;
/**
 * 
 */
class CoursesController extends Course
{
	
	public function courses()
	{
		Session::get('email', 'login');

		return view("admin/courses", [
			'title' => 'Courses List',
			'active' => 'active',
			'courses' => $this->showAll()
		]);
	}

	public function create_course()
	{
		return view("admin/create_course");
	}

	public function store()
	{
		Session::get('email', 'login');

		$query = $this->create(Auth::validate(
			[
				'name' => $_POST['name'],
				'code' => $_POST['code'],
				'unit' => $_POST['unit']
			],
			"admin/create_couse"
		));

		if ($query > 0) 
		{
			return view("/admin/courses", [
				'success' => "Course Added Successfully!", 
				'courses' => $this->showAll()
			]);
		}
		else{
			echo "Something went wrong!";
		}
	}

	public function edit_course($id)
	{
		Session::get('email', 'login');

		if (isset($id) ) {
			return view("/admin/edit_course", [
				'title' => 'Update User',
				'course' => $this->find($id)
			]);
		}

		die("404 Page Not Found");
	}

	public function update_course($id)
	{
		Session::get('email', 'login');
		
		$query = $this->update(Auth::validate(
			[
				'name' => $_POST['name'],
				'code' => $_POST['code'],
				'unit' => $_POST['unit']
			],
			"admin/edit_course"
		), $id);

		if ($query > 0) 
		{
			return view("/admin/courses", [
				'success' => "Course Updated Successfully!", 
				'courses' => $this->showAll()
			]);
		}

		die("404 Page Not Found");
	}

	public function delete_course($id)
	{
		Session::get('email', 'login');

		$query = $this->delete($id);

		if ($query > 0) 
		{
			return view("/admin/courses", [
				'success' => "Course Deleted Successfully!", 
				'courses' => $this->showAll()
			]);
		}
	}
}