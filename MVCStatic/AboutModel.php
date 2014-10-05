<?php
/**
 * @author pcole
 * @example MVC
 */

class Model 
{
	// Public because view must consume it
	public $str = "";
			
	public function __construct()
	{
		$this->str = "Here is some information about Peter Cole:<br>";
		$this->str .= "He lives in Philadelphia.<br>";
		$this->str .= "He is going to school at D.I.T. in Dublin.<br>";
		$this->str .= "He is a husband and a father.<br>";
	}
}
?>