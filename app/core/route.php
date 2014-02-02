<?php
Class Route
{
	static function start()
	{
		$controller_name='main';
		$action_name='index';
		$routes=explode('/',$_SERVER['REQUEST_URI']);
		
		if (!empty($routes[1]))
			$controller_name=$routes[1];
		
		if (!empty($routes[2]))
		{
			if ($routes[2][0]!='?')
				$action_name=$routes[2];
			else
				$params=$routes[2];
		}
		
		$model_name="Model_".$controller_name;
		$DBHelper_name="DBHelper_".$controller_name;
		$controller_name="Controller_".$controller_name;
		$action_name="action_".$action_name;

		$model_file="app/models/".$model_name.".php";
		if (file_exists($model_file))
			include $model_file;

		$model_file="app/models/DBHelper/".$DBHelper_name.".php";
		if (file_exists($model_file))
			include $model_file;

		$controller_file="app/controllers/".$controller_name.".php";
		if (file_exists($controller_file))
			include $controller_file;
		else
			Route::ErrorPage404();
			
		$controller = new $controller_name;
		$action = $action_name;
		
		if (method_exists($controller,$action))
			$controller->$action();
		else
			Route::ErrorPage404();
	}
	
	function ErrorPage404()
	{
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
	}
}
?>