<?php

namespace app\Controller;

include "_pilarMVC/controller.php";

class MenuController extends Controller{
	
	protected function httpGetRequest()
	{
		include "./view/menu.php";
	}
	
	protected function httpPostRequest()
	{
		echo "Not implemented";
	}

}

$controller = new MenuController();

?>