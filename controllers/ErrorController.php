<?php
class ErrorController extends Interceptor{
	function __construct($arg = false){
		parent::__construct();
		echo "Error: ".$arg;
		$this->view->msg = "This page doesnt exists";
		$this->view->render('error/404');
	}	
}
?>