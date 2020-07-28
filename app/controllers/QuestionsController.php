<?php 

namespace App\Controllers;

use App\Models\Question;
use App\Models\Option;
use App\Models\Course;
use App\Middlewares\Auth;
use App\Middlewares\Session;

/**
 * 
 */
class QuestionsController extends Question 
{
	public function questions()
	{
		Session::get('email', 'login');

		return view("admin/questions", [
			'title' => 'Question List',
			'questions' => $this->showAll()
		]);
	}

	public function create_question()
	{
		return view("admin/create_question", [
			'title' => 'Question List',
			'courses' => (new Course)->showAll()
		]);
	}

	public function store_question()
	{
		Session::get('email', 'login');

		$query = $this->create(Auth::validate(
			[
				'course' => $_POST['course'],
				'question' => $_POST['question'],
			],
			"/admin/create_question"
		));

		$question = $this->showOne("question", $_POST['question']);

		if ($query > 0) 
		{
			Session::set('question', $_POST['question']);
			Session::set("question_id", $question['id']);

			return (new OptionsController)->store_options();
		}

		else{
			echo "Something went wrong!";
		}
	}

	public function edit_question($id)
	{
		Session::get('email', 'login');

		if (isset($id) ) {
			return view("/admin/edit_question", [
				'title' => 'Update User',
				'courses' => (new Course)->showAll(),
				'options' => (new Option)->showAll(),
				'question' => $this->find($id)
			]);
		}

		die("404 Page Not Found");
	}

	public function update_question($id)
	{
		Session::get('email', 'login');

		$query = $this->update(Auth::validate(
			[
				'course' => $_POST['course'],
				'question' => $_POST['question'],
			],
			"/admin/create_question"
		), $id);

		$question = $this->showOne("question", $_POST['question']);

		if ($query > 0) 
		{
			Session::set('question', $_POST['question']);
			Session::set("question_id", $question['id']);

			return (new OptionsController)->update_options();
		}

		else{
			echo "Something went wrong!";
		}
	}

	public function delete_question($id)
	{
		Session::get('email', 'login');

		$query = $this->delete($id);

		if ($query > 0) 
		{
			return view("/admin/questions", [
				'success' => "Question Deleted Successfully!", 
				'questions' => $this->showAll()
			]);
		}
	}
}