<?php
/**
 * @author pcole
 * @example mvc
 * 
 */

class View
{
	private $controller;
	private $model;
	
	 public function __construct($controller, $model)
	 {
	 	$this->model = $model;
	 	$this->controller = $controller; 	
	 }
	 
	 public function output()
	 {
		$result = "<p><h1>Portfolio</h1>" . $this->model->str . "</p><a href='.?page=about'>About</a>";
		return $result;
	 }
}
?>