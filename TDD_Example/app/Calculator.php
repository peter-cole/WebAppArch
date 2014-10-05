<?php
class Calculator
{
	// Simply add 2 numbers.
	public function Add($number1, $number2)
	{
		if (is_numeric($number1) && is_numeric($number2))
		{
			return $number1 + $number2;
		}
		else
		{
			return false;
		}
	}
	
	// Simply subtract 2 numbers.
	public function Subtract($number1, $number2)
	{
		if (is_numeric($number1) && is_numeric($number2))
		{
			return $number1 - $number2;
		}
		else
		{
			return false;
		}
	}
	
	// Multiply 2 numbers.
	public function Multiply($number1, $number2)
	{
		if (is_numeric($number1) && is_numeric($number2))
		{
			return $number1 * $number2;
		}
		else
		{
			return false;
		}
	}
	
	// Multiply 2 numbers.
	public function Divide($number1, $number2)
	{
		if (is_numeric($number1) && is_numeric($number2))
		{
			return $number1 / $number2;
		}
		else
		{
			return false;
		}
	}
}
?>