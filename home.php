<!--
file name:home.php
author:Richard
site name:Richard
description:the start of my website, home containing an intro. -->
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Richard | Home</title>
<link rel="stylesheet" href="scripts/css/normalize.css" />
<link rel="stylesheet" href="scripts/css/foundation.css" />
<link rel="stylesheet" href="scripts/css/main.css" />
<script src="scripts/js/vendor/modernizr.js"></script>
</head>
<?php include "header.php";?>
<div id="welcome" style="display:none;">
	<h1>Welcome to Richard!</h1> 
</div>
<!--img gallery -->
<div id="gallery" class="columns" style="">
<ul class="example-orbit" data-orbit>
	  <li class="img2">
		<a href="http://richards.uni.me"><img src="img/richards.bmp" alt="slide 1" /></a>
		<div class="orbit-caption">
		  richards.uni.me
		</div>
	  </li>
	  <li id="img1" class="active">
		<a href="http://webdesign4.georgianc.on.ca/~200220923/COMP1006/assign2a/login.html"><img src="img/manager.bmp" alt="slide 2" /></a>
		<div class="orbit-caption">
		  PHP File Manager
		</div>
	  </li>
	  <li class="img2">
		<a href="http://richards.uni.me/jquery/blackjack.html"><img src="img/games.bmp" alt="slide 3" /></a>
		<div class="orbit-caption">
		  Games
		</div>
	  </li>
	</ul>
</div>
<div id="mission" class="medium-12 columns">
	<p>Here you will find cool designs and features that I make on my spare time.</p>
	<a href="projects.php" class="button">See more</a>
</div>
<div id="reasons" class="medium-8 columns">
<h2>Reasons</h2>
	<p id="r1">Although I mainly program applications, I am also into website programming and design as I find it fun.</p>
	<p id="r2">I hope that this design and the feature this website contains inspires you and other users to innovate the world wide web with creative and innovative work.</p>
	<p id="r3">Because every little work you put into the web can impact other people's life in a positive way and inspire them to do the same.</p>
</div>
<?php include "footer.php";?>
<script>
//will add effect to welcome text
$( "#welcome" ).fadeIn( 2000 );</script>