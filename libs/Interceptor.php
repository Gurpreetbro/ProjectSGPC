<?php
class Interceptor{
	function __construct(){
		echo "In Interceptor<br/>";
		$this->view = new View();
	}
}
?>