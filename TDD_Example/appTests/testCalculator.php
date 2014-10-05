	<?php
	/**
	 * Luca Longo
	 * Example of a TDD test case class - calculator example
	 *
	 **/
	 require_once('../../simpletest/autorun.php');

	 class CalculatorTests extends UnitTestCase {
	 	private $calculator;
	 	
	 	public function setup() 
	 	{
	 		require_once('../app/Calculator.php');
	 		$this->calculator= new Calculator();
	 	}
	 	
	 	public function teardown()
	 	{
	 		$this->calculator = null;
	 	}
	 	
	 	public function testAdd()
	 	{
	 		$this->assertEqual(3, $this->calculator->add(1,2));
	 	}
	 	
	 	public function testSubtract()
	 	{
	 		$this->assertEqual(-1, $this->calculator->subtract(1,2));
	 	}
	 	
	 	public function testDivide()
	 	{
	 		$this->assertEqual(0.5, $this->calculator->divide(1,2));
	 	}
	 	
	 	public function testMultiply()
	 	{
	 		$this->assertEqual(2, $this->calculator->multiply(1,2));
	 	}
	 }
	 ?>
	 