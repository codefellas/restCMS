<?php

namespace controller;

include "_pilarMVC/controller.php";

class ReservationController extends Controller{
	
	protected function httpGetRequest()
	{
		include "./view/reservation.php";
	}
	
	protected function httpPostRequest()
	{
		echo "Not implemented";
	}

}

$controller = new ReservationController();

?>