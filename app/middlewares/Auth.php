<?php 

namespace App\Middlewares;
/**
 * 
 */
class Auth
{
	public static $validated = [];
	public static $error = [];

	public static function validate($credentials, $page)
	{
		static::authenticate($credentials);

		if (count(static::$error) > 0) 
		{
			die(view($page, [
				'error' => static::$error,
				'old' => static::$validated
			]));
		}

		return $credentials;
	}

	protected static function authenticate($credentials)
	{
		foreach ($credentials as $key => $value) 
		{		
			if (empty($value)) 
			{
				static::$error[$key] = ucfirst($key)." field is required";
			}
			else
			{
				static::$validated[$key] = $value;
			}
				
		}
	}
}
