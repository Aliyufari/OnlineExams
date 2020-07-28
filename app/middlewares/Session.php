<?php 

namespace App\Middlewares;
/**
 * 
 */
class Session
{
	private static $sessionStart = false;

	protected static function start()
	{
		if (self::$sessionStart == false) 
		{
			session_start();
			self::$sessionStart = true;
		}
	}

	public static function get($key, $path = null)
	{
		self::start();
		
		if ($path != null  && !isset($_SESSION[$key]))
		{
			redirect($path);
		}
		else
		{
			return $_SESSION[$key];
		}
	}

	public static function set($key, $value)
	{
		self::start();
		session_regenerate_id(true);
		$_SESSION[$key] = $value;
	}

	public static function destroy($key, $path)
	{
		if (!self::$sessionStart == true) 
		{
			self::start();
		}
		unset($_SESSION[$key]);
		session_unset();
		session_destroy();

		redirect($path);
	}
}