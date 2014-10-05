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
	 	$action = isset($_GET["action"]) ? $_GET["action"] : "";

	 	switch ($action)
	 	{
		 	case "":	 	
		 		$result = "<p><a href='index.php?action=clicked'>" . $this->model->str . "</a></p>";
		 		break;
		 	
		 	case "clicked":
		 	default:
		 		$result = "<p>" . $this->model->str . "</p>";
		 		break;
	 	}
	 	return $result;
	 }
}
?>