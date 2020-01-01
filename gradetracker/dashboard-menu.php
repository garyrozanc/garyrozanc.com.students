<!doctype html>
<html class="login no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body class="login">
		
		<!--
		<p>dashboard-menu.php</p>
		<p><a href="index.php">Back to index.php</a></p>
		-->
		
	<?php 
		include 'db.php';
		session_start();
		unset($_SESSION['id_course']);
	?>
		<section class="login-form">
			
			<p><?php echo $_SESSION['name']; ?>, choose an option.</p>
			<ul>
				
			<?php
				
				$query = "SELECT id_course FROM students WHERE id_email = ?";
				$statement = $mysqli->prepare($query);
				$statement->bind_param('s', $_SESSION['id_email']);
				$statement->execute();
				$statement->bind_result($id_course);
				$statement->store_result();
				
				if ($statement->num_rows > 0) {
					while($statement->fetch()) {
						$id_course_explode = explode(',', $id_course);
					    
					    if ($id_course_explode[0]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[0]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"dashboard.php?id_course=".$id_course_explode[0]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    if ($id_course_explode[1]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[1]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"dashboard.php?id_course=".$id_course_explode[1]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    	if ($id_course_explode[2]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[2]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"dashboard.php?id_course=".$id_course_explode[2]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    	if ($id_course_explode[3]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[3]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"dashboard.php?id_course=".$id_course_explode[3]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    	echo "<li><a href=\"advising.php\">Advising Appointments</a></li>";
					    	
					}
				} else {
					echo "<p>Something went really wrong!</p>";
				}
				
				$statement->close();
			?>
			</ul>
		</section>
		
		<?php include('includes/footer.php'); ?>
		
	</body>

</html>