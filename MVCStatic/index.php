<?php
include "Model.php";
include "View.php";
include "Controller.php";

	$page = $_GET['page'];

	if (!empty($page)) 
	{
	    $data = array(
	        'about'     => array('model' => 'AboutModel', 		'view' => 'AboutView', 		'controller' => 'AboutController'),
	        'portfolio' => array('model' => 'PortfolioModel', 	'view' => 'PortfolioView', 	'controller' => 'PortfolioController')
	    	);
	 
	    foreach($data as $key => $components)
	    {
	        if ($page == $key) 
	        {
	            $modelName 		= $components['model'];
	            $viewName  		= $components['view'];
	            $controllerName = $components['controller'];
	            break;
	        }
	    }
	 
	    if (isset($modelName)) 
	    {
	        // Instantiate MVC components
			$modelObj = new Model();
			$controllerObj = new Controller($modelObj);
			$viewObj = new View($controllerObj, $modelObj);
	        echo $viewObj->output();
	    }
	}
?>