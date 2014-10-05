	<?php
	/**
	 * Luca Longo
	 * Example of a TDD test case class - calculator example
	 *
	 **/
	 require_once('../../simpletest/autorun.php');

	 class CalculatorTestsWithStrings extends UnitTestCase {
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
	 		$this->assertFalse($this->calculator->add(1,"BlahFoo"));
	 		$this->assertFalse($this->calculator->add(1,null));
	 	}
	 	
	 	public function testSubtract()
	 	{
	 		$this->assertFalse($this->calculator->subtract("BlahFoo",2));
	 		$this->assertFalse($this->calculator->subtract(null,2));
	 	}
	 	
	 	public function testDivide()
	 	{
	 		$this->assertFalse($this->calculator->divide("BlahFoo",2));
	 		$this->assertFalse($this->calculator->divide(null,2));
	 	}
	 	
	 	public function testMultiply()
	 	{
	 		$this->assertFalse($this->calculator->multiply("BlahFoo",null));
	 		$this->assertFalse($this->calculator->multiply(1,null));
	 	}
	 }
	 ?>
	 