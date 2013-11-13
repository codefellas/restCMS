<?php
	global $pilarMVC;
?>
<html>
	<head>
		<title>Rest CMS - Home</title>
		<meta charset="UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/css/masterpage.css" />
		<link rel="stylesheet" type="text/css" href="/css/default.css" />
		<link rel="stylesheet" type="text/css" href="/css/widget.css" />
		<link rel="stylesheet" type="text/css" href="/css/form.css" />
		<link rel="stylesheet" type="text/css" href="/css/reservation.css" />
		
		
		<script src="/js/jquery/jquery-1.9.1.js"></script>
		<script src="/js/jquery-ui/jquery-ui-1.10.3.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="/js/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
		
		
		
		
  		
		<!--
		<script src="js/jquery.slides.min.js"></script>
  		<script>
		    $(function(){
		      $("#slides").slidesjs({
		        width: 940,
		        height: 528
		      });
		    });
  		</script>	
-->		
	</head>
	<body>
		<header>
			<center>
			<div class="logo ">
				
					<a href="/">
						<img src="img/logo.jpg" alt="" class="centerDiv"/>
					</a>
				
			</div>
			<div class="menu">
				<div class="subtitle">
					Somos os melhores! Delivery (11)1111-1111
				</div>
				
				<nav> <!-- Navigation Bar -->
					<ul>
						<li><a href="<?php echo $pilarMVC->url("menu"); ?>">Cardapio</a></li>
						<li><a href="<?php echo $pilarMVC->url("promotion"); ?>">Promoção</a></li>
						<li><a href="<?php echo $pilarMVC->url("reservation"); ?>">Reservas</a></li>
						<li><a href="<?php echo $pilarMVC->url("contact"); ?>">Contato</a></li>
					</ul>
				</nav>
				
			</div>
			<div class="classyLine"></div>
		</header>
		<section id="content"> <!-- Content -->