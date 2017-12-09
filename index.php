<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<!DOCTYPE HTML>
<html>	
<head></head>
<body>
	<form method="post" action="send_mail.php">
		Name: <input type="name" class="form-control" name="sender_name" placeholder="Name">
		<input type="email" name="email" placeholder="Email">
		<textarea name="message" rows="5" placeholder="Message"></textarea>
		<input type="submit" value="Send Message">
	</form>
</body>
</html>