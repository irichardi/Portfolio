<!--
file name:home.php
author:Richard
site name:Richard
description:the start of my website, home containing an intro. -->
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Richard | Github</title>
<!-- css style sheets -->
<link rel="stylesheet" href="scripts/css/normalize.css" />
<link rel="stylesheet" href="scripts/css/foundation.css" />
<link rel="stylesheet" href="scripts/css/main.css" />
<script src="scripts/js/vendor/modernizr.js"></script>
</head>
<?php include "header.php";?>
<h1 class="columns" style="text-align:center">Github</h1>
<p class="small-12 medium-12 large-12 small-centered columns" style="text-align:center;">Click the botton below to enter my Github Repository!</p>
<div id="gitlink" class="small-1 medium-1 large-1 small-centered columns">
<a href="https://github.com/irichardi/Portfolio" class="button">Enter Github</a>
</div>
<?php include("footer.php") ?>
<script>
$("#ligit a").css( "color", "#0078a0" );//active function
</script>