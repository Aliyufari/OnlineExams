<?php 

namespace App\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Option;
use App\Models\Course;
use App\Middlewares\Auth;
use App\Middlewares\Session;

/**
 * 
 */
class AnswersController extends Answer
{
	public function create_answer()
	{
		Session::get('email', 'login');	
		$question = Session::get('question');	
		$question_id = Session::get('question_id');

		$question = (new Question)->showOne("question", $question);
		$options = (new Option)->showOne("question_id", $question_id);

		return view('/admin/create_answer', [
			'question' => $question,
			'options' => $options
		]);
	}

	public function store_answer()
	{
		Session::get('email', 'login');
		$question_id = Session::get('question_id');

		$query = $this->create(Auth::validate(
			[
				'answer' => $_POST['answer'],
				'question_id' => $question_id
			],
			"admin/create_answer"
		));

		if ($query > 0) 
		{
			return redirect('/admin/questions');
		}
	}

	public function edit_answer($id = null)
	{
		Session::get('email', 'login');	
		$question = Session::get('question');	
		$question_id = Session::get('question_id');

		$question = (new Question)->showOne("question", $question);
		$options = (new Option)->showOne("question_id", $question_id);

		return view('/admin/edit_answer', [
			'question' => $question,
			'options' => $options
		]);
	}

	public function update_answer($id = null)
	{
		Session::get('email', 'login');
		$question_id = Session::get('question_id');

		$answer = $this->showOne('question_id', $question_id);

		// die(var_dump($answer['id']));

		$id = $answer['id'];

		$query = $this->update(Auth::validate(
			[
				'answer' => $_POST['answer'],
				'question_id' => $question_id
			],
			"admin/edit_answer"
		), $id);

		if ($query > 0) 
		{
			return redirect('/admin/questions');
		}
	}
}