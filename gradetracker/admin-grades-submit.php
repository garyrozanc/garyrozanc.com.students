<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>
		<p>admin-grades-submit.php</p>
		<p><a href="admin-menu.php">Back to admin-menu.php</a></p>
		
		<?php
		include 'db.php';
		foreach ($_POST['profiles'] as $profile) {
			$query = sprintf("INSERT INTO grades (id_course, id_email, title, url, points_earned, point_total, comments) 
			                  VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')", 
			                  $profile['id_course'], $profile['id_email'], $_POST['title'], $_POST['url'], $profile['points_earned'], $_POST['point_total'], $profile['comments']);	
			$mysqli->query($query);
			mysqli_close($con);
		}
		?>	
	</body>

</html>
