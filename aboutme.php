<!--
file name:aboutme
author:Richard
site name:Richard
description:everything about me page -->
<!DOCTYPE html>
<html class="no-js" lang="en" >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Richard | Skills</title>
<!-- css style sheets -->
<link rel="stylesheet" href="scripts/css/normalize.css" />
<link rel="stylesheet" href="scripts/css/foundation.css" />
<link rel="stylesheet" href="scripts/css/main.css" />
<script src="scripts/js/vendor/modernizr.js"></script>
</head>
<?php include "header.php";?>
<!-- About me information and a picture -->
<div id="aboutme">
	<div id="studimg" class="small-4 medium-4 large-4 columns">
	<img src="img/me.png" alt="pic of me" />
	</div>
	<div class="small-8 medium-7 large-4 columns">
		<h1>About Me</h1>
		<p>I am a student studying Computer Programming Analyst at Georgian College who enjoys programming and making user applications.</p>
	</div>
	<div id="expertise" class="small-12 medium-8 large-12 columns">
	<h2>Areas of Expertise</h2> 
	<ul>
	<li>Languages: C/C++, Java, AS, python, and JS/jQuery.</li>
	<li>Software: Unity, Blender, Eclipse, Netbeans, MS visual studio, MS office suite, Adobe Creative suite, and others.</li>
	</ul>
	</div>
</div>
<?php include("footer.php") ?>
<script>
$("#lime a").css( "color", "#0078a0" );//active function
</script>
