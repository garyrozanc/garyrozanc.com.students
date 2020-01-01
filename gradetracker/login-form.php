<?php
	include 'db.php';
	session_start();
	$user = $_SESSION['user'];	
?>

<p>Enter your password to enter the dashboard.</p>

<form action="login-verify.php" method="post">
	<input type="password" name="user" tabindex="1" autocomplete="off" placeholder="User Login" required>
	<input type="submit" value="Submit">
</form>