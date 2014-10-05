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
		$result = "<p><h4>" . $this->model->str . "</h4></p><a href='.?page=portfolio'>Portfolio</a>";
	 	return $result;
	 }
}
?>