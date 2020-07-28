<?php 

namespace App\Models;

use App\Core\Helper;
use App\Core\Database\Connection;
use App\Core\Database\Model;
/**
 * 
 */
class Answer
{
	
	protected $db;
	protected $table = "answers";

	private function connect()
	{
		Helper::bind('pdo', require'config/config.php');
		$this->db = (new Connection)->make(Helper::get('pdo')['database']);
	}
		
	public function create($answerProperties)
	{
		$this->connect();

		$query = (new Model($this->db))->insert($this->table, $answerProperties);

		if ($query > 0) {
			return $query;
		}

		die('Something went wrong!');
	}

	public function showAll()
	{
		$this->connect();

		$query = (new Model($this->db))->selectAll($this->table);

		if ($query > 0) {
			return $query;
		}

		die(view("admin/courses", [
				'wrong' => 'Something went wrong!'
		]));
	}

	public function selectCount($key, $value)
	{
		$this->connect();

		$query = (new Model($this->db))->selectCount($this->table, $key, $value);

		if ($query > 0) {
			return $query;
		}

		die(view("admin/courses", [
				'wrong' => 'Something went wrong!'
		]));
	}

	public function update($answerProperties, $id)
	{
		$this->connect();
		$query = (new Model($this->db))->update($this->table, $answerProperties, $id);

		if ($query > 0) {

			return $query;
		}

		die('Something went wrong!');
	}

	public function delete($id)
	{
		$this->connect();
		$query = (new Model($this->db))->delete($this->table, $id);

		if ($query > 0) {

			return $query;
		}

		die('Something went wrong!');
	}

	public function find($id)
	{
		$this->connect();

		$query = (new Model($this->db))->selectOne($this->table, $id);

		if ($query > 0) {
			
			return $query;
		}

		die(view("admin/courses", [
				'wrong' => 'Something went wrong!'
		]));
	}

	public function showOne($key, $value)
	{
		$this->connect();

		$query = (new Model($this->db))->selectId($this->table, $key, $value);

		if ($query > 0) {
			return $query;
		}

		die(view("admin/courses", [
				'wrong' => 'Something went wrong!'
		]));
	}
}