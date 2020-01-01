<section class="login-form">
	<h1>Create Password</h1>
	<p><?php echo $_SESSION['name'] ?>, your temporary password is your Campus ID. Until you create a password, anyone with access to your campus email address and campus id would be able to login in and see your grades. You will continue to see this message each time you log in until you create a password.</p>
	
	<p>Enter the pin number located in the class Slack channel <em>#announcements</em>.</p>
	<form action="login-update.php" method="post">
		<label for="user_pin">Pin Number</label>
		<input type="text" name="user_pin" id="user_pin" tabindex="1" autocomplete="off" placeholder="1234" required>
		<input type="submit" value="Submit">
	</form>
</section>