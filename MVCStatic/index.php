<?php
	
	$page= empty($_GET['page']) ? "about" : $page = $_GET['page']; 
	
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
    	include_once ($modelName . ".php");
    	include_once ($viewName . ".php");
    	include_once ($controllerName . ".php");
    	 
        // Instantiate MVC components
		$modelObj = new Model();
		$controllerObj = new Controller($modelObj);
		$viewObj = new View($controllerObj, $modelObj);
		
        echo $viewObj->output();
    }
?>