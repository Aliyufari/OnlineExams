<?php 
	
namespace App\Models;

use App\Core\Helper;
use App\Core\Database\Connection;
use App\Core\Database\Model;

/**
 * 
 */
class User 
{
	protected $db;
	protected $table = "users";

	private function connect()
	{
		Helper::bind('pdo', require'config/config.php');
		$this->db = (new Connection)->make(Helper::get('pdo')['database']);
	}
		
	public function create($userCredentials)
	{
		$this->connect();

		$query = (new Model($this->db))->insert($this->table, $userCredentials);

		if ($query > 0) {
			return $query;
		}

		die('Something went wrong!');
	}

	public function permit($userCredentials)
	{
		$this->connect();

		$query = (new Model($this->db))->select($this->table, $userCredentials);

		if ($query > 0) {
			return $query;
		}

		die(view("login", [
				'wrong' => 'Incorrect Email / Password!'
		]));
	}

	public function update($userCredentials, $id)
	{
		$this->connect();
		$query = (new Model($this->db))->update($this->table, $userCredentials, $id);

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
}

