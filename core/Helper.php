<?php 
	
namespace App\Core;

/**
 * 
 */
class Helper
{
	
	protected static $registry = [];

	public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}
	
	public static function get($key)
	{
		if (! array_key_exists($key, static::$registry)) {
			throw new Exception("No key {$key} axist!");
		}
		
		return static::$registry[$key];
	}
}