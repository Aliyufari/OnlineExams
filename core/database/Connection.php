<?php 

namespace App\Core\Database;

use PDO;
/**
 * 
 */
class Connection 
{
	public static function make($config)
	{
		try {
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['user'],
				$config['password'],
				$config['option']					
			);
		} 
		catch (PDOException $e) {

			die($e->getMessage());
		}
	}
}
