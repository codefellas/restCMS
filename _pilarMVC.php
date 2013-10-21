<?php

class PilarMVC
{
	private $CONFIG_MASTERPAGE_HEADER = "/view/_masterpage/header.php";
	private $CONFIG_MASTERPAGE_FOOTER = "/view/_masterpage/footer.php";
	private $CONFIG_CONTROLLER_DEFAULT = "home";
	
	private $controler = "";
	private $action = "";
	private $parameter = "";
	
	public function getAction()
	{
		return $this->action;
	}
	public function getParameter()
	{
		return $this->parameter;
	}
	
	function run()
	{		
		$this->controller = $_REQUEST["_c"];
		$this->action = $_REQUEST["_a"];
		$this->element = $_REQUEST["_e"];
		
		if($this->controller == null)
		{
			$this->controller = $this->CONFIG_CONTROLLER_DEFAULT;
		}
		
		include $this->CONFIG_MASTERPAGE_HEADER;
		include "controller/" . $this->controller . "Controller.php";
		include $this->CONFIG_MASTERPAGE_FOOTER;
	}
	
	public function url($controller, $action = "", $parameter = "")
	{
		if($action != "" && $parameter != ""){
			return "index.php?_c=" . $controller . "&_a=" . $action . "&_p=" . $parameter;
		}else if($action != ""){
			return "index.php?_c=" . $controller . "&_a=" . $action;
		}else{
			return "index.php?_c=" . $controller;
		}
	}
}












?>