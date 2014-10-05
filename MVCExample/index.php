<?php
include "Model.php";
include "View.php";
include "Controller.php";

// instantiate MVC components
	$modelObj = new Model();
	$controllerObj = new Controller($modelObj);
	$viewObj = new View($controllerObj, $modelObj);
	
	if (isset($_GET["action"]) && !empty($_GET["action"]))
	{
		// $controllerObj->{$_GET["action"]};
		$controllerObj->clicked();
	}
	
	echo "Date & Time: " . Date("Y/m/d h:i:s");
	echo $viewObj->output();
?>