<?php 
	
namespace App\Core;

use Exception;
/**
 * 
 */
class Router
{
	protected $property;
	protected $routes = [
		'POST' => [],
		'GET' => []
	];

	public static function load($file)
	{
		$router = new self;

		require $file;

		return $router;
	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	protected function callAction($controller, $action)
	{
		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller;

		if (!method_exists($controller, $action)) 
		{
			throw new Exception(
				"{$controller} could not respond to {$action} action"
			);
		}
		
		return $controller->$action(isset($this->property) ? $this->property : null);
	}

	public function direct($uri, $requestType)
	{
		if (!array_key_exists($uri, $this->routes[$requestType])) 
		{			
			$uri = explode('/', $uri);
			
			if (count($uri) == 3) 
			{
				$this->property = (int)end($uri);
				array_pop($uri);

				$uri = implode("/", array_values($uri));

				return $this->callAction(
					...explode('@', $this->routes[$requestType][$uri])
				);
			}

			throw new Exception("No Route Define for this URI");

		}
		
		return $this->callAction(
			...explode('@', $this->routes[$requestType][$uri])
		);	
			
	}
}
