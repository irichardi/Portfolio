<!--
file name:projects.php
author:Richard
site name:Richard
description:contains my past work and current. -->
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Richard | Projects</title>
<!-- css style sheets -->
<link rel="stylesheet" href="scripts/css/normalize.css" />
<link rel="stylesheet" href="scripts/css/foundation.css" />
<link rel="stylesheet" href="scripts/css/main.css" />
<script src="scripts/js/vendor/modernizr.js"></script>
</head>
<?php include "header.php";?>
<h1 class="columns" style="text-align:center;">Projects</h1>
<!--img gallery -->
<div id="gallery" class="small-12 medium-12 large-7 small-centered columns">
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
<?php include("footer.php") ?>
<script>
$("#lipro a").css( "color", "#0078a0" );//active function
</script>