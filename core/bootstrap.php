<?php 

// use App\Core\Helper;
// use App\Models\User;
// use App\Core\Database\Connection;
// use App\Core\Database\Model;


// $ee = Helper::bind('config', require'config/config.php');


// $dd = Helper::bind('database', new Model(
// 	Connection::make(Helper::get('config')['database'])
// ));

function view($name, $data = [])
{
	extract($data);

	return require "views/{$name}.view.php";
}

function redirect($path, $data = [])
{
	extract($data);
	header("Location: $path");
}

function extend($name)
{
	return require "views/{$name}.view.php";
}


	

