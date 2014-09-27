<!--
file name:service.php
author:Richard
site name:Richard
description:where people come to get help. -->
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Richard | Services</title>
<!-- css style sheets -->
<link rel="stylesheet" href="scripts/css/normalize.css" />
<link rel="stylesheet" href="scripts/css/foundation.css" />
<link rel="stylesheet" href="scripts/css/main.css" />
<script src="scripts/js/vendor/modernizr.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>
<?php include "header.php";?>
<!-- Display my services in boxes -->
<div id="services">
<h1>Services</h1>
	<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
		<li>
		<img src="img/mobile.bmp" alt="mobile"/>
		<p id="servmsg">Mobile Design
			<p>Get an exclusive design and site specifically for mobile.</p>
		</p>
		</li>
		<li>
		<img src="img/res.jpg" alt="mobile"/>
		<p id="servmsg">Responsive Design
			<p>Have your website function across all screen sizes.</p>
		</p>
		</li>
		<li>
		<img src="img/gamesserv.bmp" alt="games"/>
		<p id="servmsg">Game Developing
		<p>Let your imagination out. Have your games built on Windows, Website, and mobile.</p>
		</p>
		</li>
	</ul>
<br />
<h4>Contact me through the contact page or fill and submit the form in <a href="contactus.php">contact me</a>.</h4>
</div>
<?php include("footer.php") ?>
<script>
$("#liserv a").css( "color", "#0078a0" );
</script>