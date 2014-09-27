<!--
file name:header.php
author:Richard
site name:Richard
description:the start of the body and header containing essential files and nav. This file will be called in all the sections with the php include function.  -->
<!-- My header is mainly started with a navigation bar and a body element. -->
<body>  
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
		<div id="logo"><img src="img/logo.png" alt="logo" /><span id="sitename">Richard</span></div>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- right Nav Section -->
    <ul class="right">
		<li id="lihome"><a href="home.php" id="home">Home</a></li>
        <li id="lime"><a href="aboutme.php">About Me</a></li>
		<li id="lipro"><a href="projects.php">Projects</a></li>
		<li id="liserv"><a href="services.php">Services</a></li>
		<li id="ligit"><a href="github.php">Github</a></li>
		<li id="licon"><a href="contactus.php">Contact Me</a></li>
    </ul>
  </section>
</nav>
<div id="page" class="columns">

