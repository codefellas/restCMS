<?php

namespace lib\pilarmvc\Controller;

abstract class Controller{
	protected $mvcAction = "";
	protected $mvcParameter = "";
	
	function __construct()
	{
		global $pilarMVC;
		$this->mvcAction = $pilarMVC->getAction();
		$this->mvcParameter = $pilarMVC->getParameter();
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$this->httpPostRequest();
		}else{
			$this->httpGetRequest();
		}
	}
	protected abstract function httpGetRequest();
	protected abstract function httpPostRequest();
}



?>