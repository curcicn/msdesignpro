<!DOCTYPE html>
<html>
	<head>
		<title>Architect Paradise</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="includes/includes.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta charset="utf-8">
	</head>
	<body>
		<div class="container">
			<header>
				<div class="logo">
					<div class="row">
						<a href="home.php"
						<?php if ($active_page == "home"){echo'id="active"';}?>>
						<img src="images/logo.png"></a>
					</div>	
					<div class="row">
						<p class="offset-5 col-2">Architect Paradise</p>
					</div>
				</div>
				<div class="row navbar">
					<a href="home.php" class="offset-1 col-2"
					<?php if ($active_page == "home"){echo'id="active"';}?>>Home</a>
					<a href="about.php" class="col-2"
					<?php if ($active_page == "about"){echo'id="active"';}?>>About</a>
					<a href="portfolio.php" class="col-2"
					<?php if ($active_page == "portfolio"){echo'id="active"';}?>>Portfolio</a>
					<a href="book-online.php" class="col-2"
					<?php if ($active_page == "book-online"){echo'id="active"';}?>>Book Online</a>
					<a href="contact.php" class="col-2"
					<?php if ($active_page == "contact"){echo'id="active"';}?>>Contact</a>
				</div>
			</header>