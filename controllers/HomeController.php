<?php
 class HomeController extends Interceptor{
 	function __construct() {
 		parent::__construct();
 		echo "we are in HomeController<br/>";
 	}

 	public function login() {
 		echo "In login function<br/>";
 	}

 	public function register() {
 		echo "In register function<br/>";
 	}

 	public function parameter($arg = false) {
 		echo "Optional Parameter: $arg <br/>";
 	}
 }
?>