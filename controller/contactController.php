<?php

namespace controller;

include "_pilarMVC/controller.php";

class ConteactController extends Controller{
	
	protected function httpGetRequest()
	{
		include "./view/contact.php";
	}
	
	protected function httpPostRequest()
	{
		echo "Not implemented";
	}

}

$controller = new ConteactController();

?>