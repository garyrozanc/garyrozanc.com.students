<!doctype html>
<html class="login no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body class="login">	
		<h1>Password Update</h1>
		<?php
		 	include 'db.php';
			session_start();
			$campus_id = $_SESSION['campus_id'];	
			
			if (!empty($_POST['user_sec_id'])) {		
				$_SESSION['user_sec_id'] = $_POST['user_sec_id'];
			}
			
			$user_sec_id = $_SESSION['user_sec_id'];
			
			$result = $mysqli->query("SELECT * FROM students WHERE campus_id = '$campus_id'");
			$row = mysqli_fetch_assoc($result);
			$result->close();
			
			$user_sec_id_md5 = sha1($user_sec_id);
			
			echo "<p>".$user_sec_id_md5."</p>";
			echo "<p>".$row['user_sec_id']."</p>";
			
			if ($row['user_sec_id'] == $user_sec_id_md5) {
				include('test-options.php');
			} elseif ($row['user_sec_id'] == $user_sec_id) {
				echo "Update your password!";
				include('test-options.php');
			} else {
				echo "<p>Wrong Password! Please try again.</p>";
				include('login.php');
			}
		?>
	</body>

</html>
