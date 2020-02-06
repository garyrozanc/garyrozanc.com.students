---
layout: default
permalink: gradebook/login.php
---
	
	<main class="gradebook">	
	<?php 
		include 'db.php';
		
		session_start();
		
		if (!empty($_POST['id_email'])) {		
			$_SESSION['id_email'] = $_POST['id_email'];
		}
		
		if (!empty($_POST['id_password'])) {		
			$_SESSION['id_password'] = sha1($_POST['id_password']);
		}
		
		$result = $mysqli->query("SELECT * FROM students WHERE id_email = '".$_SESSION['id_email']."'");
		$row = mysqli_fetch_assoc($result);
		$result->close();
				
		$_SESSION['name'] = $row['name'];
		
		if ($row['advisee'] == "1" && $row['id_course'] === NULL) {
			include('login-warning.php');
		} elseif ($row['id_password'] == $_SESSION['id_password']) {
			header('Location: menu.php');
		} else {
			echo "<section class=\"login-error\"><p>You entered an unknown email address or the wrong password. <a href=\"index.php\" title=\"Login Page\">Please try again.</a></p></section>";
		}
	?>	
	</main>
