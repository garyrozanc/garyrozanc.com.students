<!doctype html>
<html class="login no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body class="login">
		
	<!-- Dev Helper Tools: Delete before production -->
		<div class="viewport"><span id="w"></span><span id="h"></span></div>
		<ul class="tempnav">
			<li><a href="index.php">index.php</a></li>
			<li><a href="assignment-page.php">assignment-page.php</a></li>
		</ul>
	<!-- End Dev Helper Tools -->
	
	<!--<main class="login">	-->
		<section class="login-form">
			<h1>Login</h1>
			<form action="login.php" method="post">
				<label for="id_email">Campus Email</label>
				<input type="text" name="id_email" id="id_email" tabindex="1" autocomplete="off" placeholder="email@umbc.edu" required>
				<label for="id_password">Password</label>
				<input type="password" name="id_password" id="id_password" tabindex="2" autocomplete="off" placeholder="Enter your Campus ID or Password" required>
				<input type="submit" value="Submit">
			</form>
		</section>
	<!--</main>-->
		
		<?php include('includes/footer.php'); ?>
		
	</body>

</html>
