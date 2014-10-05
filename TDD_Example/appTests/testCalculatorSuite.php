<?php 
	require_once('../../simpletest/autorun.php'); 

	class TestsSuite extends TestSuite 
	{ 
		function __construct() 
		{ 
			parent::__construct(); 
			$this->addFile('testCalculator.php'); 
			$this->addFile('testCalculatorWithStrings.php'); 
			echo Date("Y/M/d h:i:s");
		}
	 }
?> 