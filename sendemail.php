<!--
file name:contactus.php
author:Richard
site name:Richard
description:this page sends email to me and user -->
<?php
		//variables that identify form details
		$email = $_POST['email'];
		$name = $_POST['name'];
		$message = $_POST['messages'];
		$subject = $_POST['subject'];
		//notify user
		mail($email, 'Richards Portfolio 1'.$subject, 'Thank you for your input '.$Name.' You will be contacted as soon as possible.',"From:irichardi@live.ca");
		//emails me
		mail('200220923@student.georgianc.on.ca', 'Richards Portfolio 2'.$subject, 'Email:'.$email.'\r\n Message:'.$message,'From:'.$email);
		header( 'Location: contactus.php' ) ;
		
?>
