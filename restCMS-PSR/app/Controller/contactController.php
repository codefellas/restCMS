<?php

namespace app\Controller;

//use lib\pilarmvc\Controller as Controller;

//include "_pilarMVC/controller.php";


class ContactController extends Controller{
	
	protected function httpGetRequest()
	{
		include "./view/contact.php";
	}
	
	protected function httpPostRequest()
	{
		echo "Not implemented";
	}

}

$controller = new ContactController();

?>