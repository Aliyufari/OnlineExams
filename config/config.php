<?php 

return [
	'database' =>[
		'connection' => 'mysql:host=localhost',
		'name' => 'online_exams',
		'user' => 'root',
		'password' => '',

		'option' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];