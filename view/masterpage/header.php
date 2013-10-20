<?php
	global $pilarMVC;
?>
<html>
	<head>
		<title>Rest CMS - Home</title>
		<meta charset="UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>
		


		</script>
  		
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
			<div class="logo ">
				<center>
					<img src="img/logo.jpg" alt="" class="centerDiv"/>
				</center>
			</div>
			<div class="menu">
				<div class="subtitle">
					Somos os melhores! Delivery (11)1111-1111
				</div>
				<nav> <!-- Navigation Bar -->
					<ul>
						<li><a href="<?php echo $pilarMVC->url("menu"); ?>">Cardapio</a></li>
						<li><a href="#">Promoção</a></li>
						<li><a href="#">Reservas</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</nav>
			</div>
			<div class="classyLine"></div>
		</header>
		<section id="content"> <!-- Content -->