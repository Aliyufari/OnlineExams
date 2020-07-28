<?php
	
namespace App\Core\Database;

use Connection;
use PDO;

/**
 * 
 */
class Model
{
	protected $db;

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function insert($table, $data)
	{
		$keys = implode(", ", array_keys($data));
		$values = implode("', '", array_values($data));

		$sql = "INSERT INTO {$table} ({$keys}) VALUES ('{$values}')";
		$query = $this->db->prepare($sql);
		$result = $query->execute();

		return $result;
	}

	public function select($table, $data)
	{
		$sql = "SELECT ";

		foreach ($data as $key => $value)
		{
			$sql .= "{$key}, ";
		}

		 $sql = substr($sql, 0, -2);

		 $sql .= " FROM {$table} WHERE ";

		foreach ($data as $key => $value) 
		{
			$sql .= "{$key} = '{$value}' AND ";
		}

		$sql = substr($sql, 0, -5);

		$query = $this->db->prepare($sql);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public function selectAll($table)
	{		
		$sql = "SELECT * FROM {$table}";

		$query = $this->db->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
			
		return $result;
	}

	public function selectOne($table, $id)
	{		
		
		$sql = "SELECT * FROM {$table} WHERE id = ?";

		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$result = $query->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	public function selectCount($table, $key, $value)
	{		
		
		$sql = "SELECT {$key} FROM {$table} WHERE $key = ?";

		$query = $this->db->prepare($sql);
		$query->execute([$value]);
		$result = $query->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	public function selectId($table, $key, $value)
	{		
		
		$sql = "SELECT * FROM {$table} WHERE $key = ?";

		$query = $this->db->prepare($sql);
		$query->execute([$value]);
		$result = $query->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	public function joinSelect($table)
	{
		$sql = "SELECT
				    questions.id,
				    questions.question,
				    questions.course,
				    options.option1,
				    options.option2,
				    options.option3,
				    options.option4,
				    answers.answer
				FROM
				    questions
				    LEFT JOIN answers ON answers.question_id = questions.id
				    LEFT JOIN options ON options.question_id = questions.id";

		$query = $this->db->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);

		// die(var_dump($result));

		return $result;
	}

	public function update($table, $data, $id)
	{

		$sql = "UPDATE {$table} SET ";

		foreach ($data as $key => $value) 
		{
			$sql .= "{$key} = '$value', ";
		}

		$sql = substr($sql, 0, -2)." WHERE id = ?";

		$query = $this->db->prepare($sql);
		$result = $query->execute([$id]);
		return $result;
	}

	public function delete($table, $id)
	{
		$sql = "DELETE FROM {$table} WHERE id=?";

		$query = $this->db->prepare($sql);
		$result = $query->execute([$id]);
		return $result;
	}

}

	// $data = [
	// 	'name' => 'Aisha Sanusi Tatimu',
	// 	'password' => 'aliyufari'
	// ];

	// Binder::bind('pdo', require '../../config/config.php');

	// $test = new QueryBuilder(Connection::make(Binder::get('pdo')['database']));
	// $info = $test->select('test', $data);

	// var_dump($info);



	