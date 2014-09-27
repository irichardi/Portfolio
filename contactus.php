<!--
file name:contactus.php
author:Richard
site name:Richard
description:contact me page where people contact me. -->
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Richard | Contact</title>
<!-- css style sheets -->
<link rel="stylesheet" href="scripts/css/normalize.css" />
<link rel="stylesheet" href="scripts/css/foundation.css" />
<link rel="stylesheet" href="scripts/css/main.css" />
<style>button{
		background-color:#333333;
	}
</style>
<script src="scripts/js/vendor/modernizr.js"></script>
</head>
<?php include "header.php";?>
<!-- news and a form -->
<h1 class="columns">Contact Me</h1>

<div id="newsfeed" class="medium-7 large-7 columns">
	<h2>News:</h2>
	<p>Richard Estrada portfolio website has launch as of 9/15/2014.</p>
</div>
<div id="contactinfo" class="medium-4 large-4 columns">
	<h2>Contact:</h2>
	<p>Email: irichardi@live.ca</p>
</div>
<form method= "post" action="sendemail.php" class="columns">
<div id="contactform" class="small-12 medium-12 large-12 columns">
	<div class="large-12 columns">
      <fieldset>
				<legend>Full Name</legend>
        <input name="name" type="text" placeholder="Enter your name" />
		</fieldset>
      <fieldset>
				<legend>Email</legend>
        <input name="email" type="email" placeholder="Enter your Email" required="required" />
		</fieldset>
		<fieldset>
					<legend>Feedback</legend>
						<div>
						<legend>Subject:</legend>
						<select id="subject" name="subject">
							<option selected="selected" value="General">Message</option>
							<option value="Support">Support</option>
							<option value="Technical">Technical</option>
							<option value="Suggestion">Suggestion</option>
							<option value="Feedback">Feedback</option>
							<option value="Thank You Note">Thank You</option>
							<option value="Website">Website</option>
						</select>
					   </div>
					<textarea cols="50" rows="5" name="messages" id="messages" required="required" maxlength="100"></textarea>
					<br/>
					<button type="submit" name="submit" value="Send"> Send</button>
		</fieldset>
	</div>
 </div>
</form>
<?php include("footer.php") ?>
<script>
$("#licon a").css( "color", "#0078a0" );//active function
</script>