<!--
file name:footer.php
author:Richard
site name:Richard
description:Closing of the page. This file will be called in all the sections with the php include function. Special thanks to foundation for providing source code for some functionalities and Jquery. My footer contains another navigation section, policy and terms for bonus marks, and copyright -->
</div>
<!--Site map -->
<footer>
<div id="footnav" class="icon-bar five-up">
  <a class="item" href="home.php">
    <img src="img/fi-home.svg" >
  </a>
  <a class="item" href="aboutme.php">
    <label>About Me</label>
  </a>
  <a class="item" href="projects.php">
    <label>Projects</label>
  </a>
  <a class="item" href="services.php">
    <label>Services</label>
  </a>
  <a class="item" href="contactus.php">
    <label>Contact Me</label>
  </a>
  <a class="item" href="github.php">
    <label>Github</label>
  </a>
</div>
	<div id="leftfoot">	
		<div id="widgets">
		<p id="stayconnect">Stay Connected:</p>
		<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/MemberProfile" data-id="https://www.linkedin.com/pub/richard-estrada-ramos/81/b15/9a7" data-format="hover"></script>
		</div>
	</div>
	<div id="rightfoot">
		<li id="lipoly"><a href="policy">Policy</a></li>
		<li id="literms"><a href="terms">Terms</a></li>
	</div>
	<div id="copyright">&copy; copyright of Richard Estrada. All rights reserved.</div>
</footer>
<!-- Javascript -->
<script src="scripts/js/vendor/jquery.js"></script>
<script src="scripts/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>