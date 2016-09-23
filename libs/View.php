<?php
class View{
	function __construct(){
		echo 'In View<br/>';
	}
	public function render($name){
		require 'views/'.$name.'.php';
	}
}
?>