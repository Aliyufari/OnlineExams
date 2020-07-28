<?php 

namespace App\Models;

use App\Core\Helper;
use App\Core\Database\Connection;
use App\Core\Database\Model;
/**
 * 
 */
class Admin 
{
	private $db;
	private $admin = "admin";
	private $table = "users";

	private function connect()
	{
		Helper::bind('pdo', require 'config/config.php');
		$this->db = (new Connection)->make(Helper::get('pdo')['database']);
	}

	public function permit($userCredentials)
	{
		$this->connect();

		$query = (new Model($this->db))->select($this->admin, $userCredentials);

		if ($query > 0) {
			return $query;
		}

		die(view("admin/login", [
				'wrong' => 'Incorrect Email / Password!'
		]));
	}

	public function show($id = null)
	{
		$this->connect();

		$query = (new Model($this->db))->selectAll($this->table, $id);

		if ($query > 0) {
			return $query;
		}

		die(view("admin/home", [
				'wrong' => 'Incorrect Email / Password!'
		]));
	}

	public function showAll()
	{
		$this->connect();

		$query = (new Model($this->db))->selectAll($this->table);

		if ($query > 0) {
			return $query;
		}

		die(view("admin/home", [
				'wrong' => 'Something went wrong!'
		]));
	}

	public function find($id)
	{
		$this->connect();

		$query = (new Model($this->db))->selectOne($this->table, $id);

		if ($query > 0) {
			
			return $query;
		}

		die(view("admin/home", [
				'wrong' => 'Something went wrong!'
		]));
	}
}
