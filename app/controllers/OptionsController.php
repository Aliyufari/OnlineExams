<?php 

namespace App\Controllers;

use App\Models\Question;
use App\Models\Option;
use App\Models\Course;
use App\Middlewares\Auth;
use App\Middlewares\Session;

use App\Controllers\AnswersController;
/**
 * 
 */
class OptionsController extends Option 
{
	public function store_options()
	{
		Session::get('email', 'login');
		$question_id = Session::get('question_id');

		$query = (new Option)->create(Auth::validate(
			[
				'option1' => $_POST['option1'],
				'option2' => $_POST['option2'],
				'option3' => $_POST['option3'],
				'option4' => $_POST['option4'],
				'question_id' => $question_id
			],
			"/admin/create_question"
		));

		if ($query > 0) 
		{
			return (new AnswersController)->create_answer();
		}

		else{
			echo "Something went wrong!";
		}
	}

	public function update_options($id = null)
	{
		Session::get('email', 'login');
		$question_id = Session::get('question_id');

		$options = $this->showOne('question_id', $question_id);

		// die(var_dump($id['id']));

		$id = $options['id'];

		$query = (new Option)->update(Auth::validate(
			[
				'option1' => $_POST['option1'],
				'option2' => $_POST['option2'],
				'option3' => $_POST['option3'],
				'option4' => $_POST['option4'],
				'question_id' => $question_id
			],
			"/admin/create_question"
		), $id );

		if ($query > 0) 
		{
			return (new AnswersController)->edit_answer();
		}

		else{
			echo "Something went wrong!";
		}
	}


}