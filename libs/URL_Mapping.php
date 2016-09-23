<?php
class URLMapping{
	function __construct(){
		$url = explode('/', rtrim($_GET['url'],'/'));
		/*print_r($url);*/
		$ControllerName = $url[0].'Controller';

		$file = 'controllers/'.$ControllerName.'.php';
		if(file_exists($file)){
			require $file;
		}else{
			require 'controllers/ErrorController.php';
			$Controller = new ErrorController("A controller with the file [$file] does not exists.");
			return false;
		}

		$Controller = new $ControllerName;
		if(isset($url[2])){
			$Controller->{$url[1]}($url[2]);
		}
		else if(isset($url[1])){
			$Controller->{$url[1]}();
		}
	}
}
?>