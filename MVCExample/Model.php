<?php
/**
 * @author pcole
 * @example MVC
 */

class Model 
{
	// Public because view must consume it
	public $str = "AAA";
			
	public function __construct()
	{
		$this->str = "Here is something clickable...";
	}
}
?>