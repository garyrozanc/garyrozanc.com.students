<!DOCTYPE html>
<html>

	<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gary Rozanc Teaching Blog</title>
  <meta name="description" content="Gary is an Associate Professor at the University of Maryland, Baltimore County. While Gary loves all things design, he specializes in teaching responsive web and user experience design.
">

  <!--<link rel="stylesheet" href="https://garyrozanc.com/students/css/main.css">-->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="canonical" href="https://garyrozanc.com/students/gradebook/login-update.php">
  <link rel="alternate" type="application/rss+xml" title="Gary Rozanc Teaching Blog" href="https://garyrozanc.com/students/feed.xml">
</head>

	
	<body id="top">
		
		<div class="wrap">
			<main class="gradebook">
		
		<script>
			function checkPass() {
			    //Store the password field objects into variables ...
			    var id_password = document.getElementById('id_password');
			    var id_password_confirm = document.getElementById('id_password_confirm');
			    //Store the Confimation Message Object ...
			    var message = document.getElementById('confirmMessage');
			    //Set the colors we will be using ...
			    var goodColor = "#66cc66";
			    var badColor = "#ff6666";
			    //Compare the values in the password field 
			    //and the confirmation field
			    if(id_password.value == id_password_confirm.value){
			        //The passwords match. 
			        //Set the color to the good color and inform
			        //the user that they have entered the correct password 
			        id_password_confirm.style.backgroundColor = goodColor;
			        message.style.color = goodColor;
			        message.innerHTML = "Passwords Match!"
			    }else{
			        //The passwords do not match.
			        //Set the color to the bad color and
			        //notify the user.
			        id_password_confirm.style.backgroundColor = badColor;
			        message.style.color = badColor;
			        message.innerHTML = "Passwords Do Not Match!"
			    }
			} 
		</script>
		
		<section class="login-form">
		<?php
			include 'db.php';
			session_start();
			
			if (!empty($_POST['user_pin'])) {		
				$_SESSION['user_pin'] = $_POST['user_pin'];
			}
			
			$result = $mysqli->query("SELECT user_pin FROM admin");
			$row = mysqli_fetch_assoc($result);
			$result->close();
			
			if ($row['user_pin'] != $_SESSION['user_pin']) {?>
				<p><?php echo $_SESSION['name']; ?>, you entered the wrong pin, please try again</a>.</p> 
				<form action="login-update.php" method="post">
					<label for="user_pin">Pin Number</label>
					<input type="text" name="user_pin" id="user_pin" tabindex="1" autocomplete="off" placeholder="Pin Number" required>
					<input type="submit" value="Submit">
				</form>
			<?php } else { 
				if (isset($_REQUEST['submit'])) {
					$id_password = sha1($_REQUEST['id_password']);
					$mysqli->query("UPDATE students SET id_password = '$id_password' WHERE id_email = '".$_SESSION['id_email']."'");
					$mysqli->close();
					?>					
					<p><?php echo $_SESSION['name']; ?>, you can now log into you dashboard with your new user login.</p>
					<form action="login.php" method="post">
						<label for="id_email">Campus Email</label>
						<input type="text" name="id_email" id="id_email" tabindex="1" autocomplete="off" placeholder="Campus Email" required>
						<br>
						<label for="id_password">Password</label>
						<input type="password" name="id_password" id="id_password" tabindex="2" autocomplete="off" placeholder="Password" required>
						<br>
						<input type="submit" value="Submit">
					</form>
				<?php } else { ?>
				<form method="post">
					<label for="id_password">New Password:</label>
					<input type="text" name="id_password" id="id_password">
					
					<label for="id_password_confirm">Confirm New Password:</label>
			        <input type="text" name="id_password_confirm" id="id_password_confirm" onkeyup="checkPass(); return false;">
			        <span id="confirmMessage" class="confirmMessage"></span>
			        
					<input name="submit" type="submit" value="Submit">
				</form>
		  <?php } 
			} ?>
		</section>	
		
	</main>

		
		
		</div>
		
		<!--<script src="https://garyrozanc.com/students/js/plugins.js"></script>-->
		<script src="../js/flowtype.js"></script>
		<script src="../js/page-scroll.js"></script>
		
		<script>
			// Change URL
			var origin = localStorage.getItem('origin');
			var a = document.getElementById('origin');
			if (a) {
				a.href = origin;
			}
		</script>
	
	</body>

</html>
