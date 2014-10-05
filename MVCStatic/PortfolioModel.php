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
		$this->str = "Peter Cole's Portfolio:<br>";
		$this->str .= "<ol>";
		$this->str .= "<li>EDS</li>";
		$this->str .= "<li>SAP</li>";
		$this->str .= "<li>Campbells Soup</li>";
		$this->str .= "<li>Banklink</li>";
		$this->str .= "<li>Datajump</li>";
		$this->str .= "<li>Greenway Medical</li>";
		$this->str .= "<li>FiServe</li>";
		$this->str .= "<li>Berwind</li>";
		$this->str .= "</ol>";
	}
}
?>