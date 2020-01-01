<!doctype html>
<html class="login no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>
		<h1>Login Menu</h1>	
		<p>Choose an Option</p>
		<ul>
		<?php
			include 'db.php';
			session_start();
			$campus_id = $_SESSION['campus_id'];
			
			$query = "SELECT course_name, course_id FROM students WHERE campus_id = ? AND advisee = '0' ORDER BY course_name ASC";
			$statement = $mysqli->prepare($query);
			$statement->bind_param('s', $campus_id);
			$statement->execute();
			$statement->bind_result($course_name, $course_id);
			$statement->store_result();
			if ($statement->num_rows > 0) {
				while($statement->fetch()) {
					echo "<li><a href=\"dashboard.php?course_id=".$course_id."\">".$course_name." Course Dashboard</a></li>";
					echo "\r\n";
				}
			}
			//echo "<li><a href=\"/uploads/index.php\">File Uploads</a></li>";
			//echo "<li><a href=\"advising.php\">Advising Appointments</a></li>";
			echo "<li><a href=\"login-update.php\">Update Password</a></li>";
			echo "\r\n";
			$statement->close();
		?>
		</ul>
	</body>

</html>
