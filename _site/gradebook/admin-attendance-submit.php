<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>	
		<p>admin-attendance.php</p>
		<p><a href="admin-menu.php">Back to admin-menu.php</a></p>
		
		<?php
		session_start();
		include 'db.php';
		
		$attendance_date = $_POST['attendance_date'];
		$todays_time = date("G:i:s");
		
		foreach($_POST['id_email'] as $id_email) {
			$result = $id_email;
			$result_explode = explode('|', $result);
			mysqli_query($mysqli,"INSERT INTO attendance (id_course, id_email, attendance_time, attendance_value, attendance_date)
								  VALUES ('".$_SESSION['id_course']."', '$result_explode[0]', '$todays_time', '$result_explode[1]', '$attendance_date')");  		
			mysqli_close($con);	 				  
		}	
		?>
	</body>

</html>
