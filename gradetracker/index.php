---
layout: default
permalink: gradetracker/index.php
---
	
		<main class="gradetracker">
			<h1>Login</h1>
			<form action="login.php" method="post" class="login-form">
				<label for="id_email">Campus Email</label>
				<input type="text" name="id_email" id="id_email" tabindex="1" autocomplete="off" placeholder="email@umbc.edu" required>
				<label for="id_password">Password</label>
				<input type="password" name="id_password" id="id_password" tabindex="2" autocomplete="off" placeholder="Enter your Campus ID or Password" required>
				<input type="submit" value="Submit">
			</form>
		</main>
