<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>	
		<?php
		session_start();
		if (!empty($_POST['id_course'])) {		
			$_SESSION['id_course'] = $_POST['id_course'];
		}
		require 'admin-approve.php';
		include 'db.php';
		?>
		<p>admin-grades.php</p>
		<p><a href="admin-menu.php">Back to admin-menu.php</a></p>
		<h1>Grades</h1>
		<form action="admin-grades-submit.php" method="post">
			<input type="text" name="title" placeholder="Assignment Title">
			<input type="text" name="url" placeholder="Assignment URL">
			<input type="text" name="point_total" placeholder="Assignment Point Value">
			<ul>
			<?php
			$query = "SELECT id_course, name, id_email, website FROM students ORDER BY name ASC";
			$statement = $mysqli->prepare($query);
			$statement->execute();
			$statement->bind_result($id_course, $name, $id_email, $website);
			$statement->store_result();
			
			if ($statement->num_rows > 0) {
				while($statement->fetch()) {
					$id_course_explode = explode(',', $id_course);
					if($id_course_explode[0] == $_SESSION['id_course']) {
						echo "<li><a href=\"".$website."\" target=\"_blank\">".$name."</a><br> \n";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_email]\" value=\"".$id_email."\"> \n";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_course]\" value=\"".$id_course_explode[0]."\"> \n";
						echo "<input type=\"text\" name=\"profiles[".$id_email."][points_earned]\" placeholder=\"Points Earned\"> \n";
						echo "<textarea name=\"profiles[".$id_email."][comments]\" placeholder=\"Comments\"></textarea></li> \n";
					}
					if($id_course_explode[1] == $_SESSION['id_course']) {
						echo "<li><a href=\"".$website."\" target=\"_blank\">".$name."</a><br> \n";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_email]\" value=\"".$id_email."\"> \n";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_course]\" value=\"".$id_course_explode[1]."\"> \n";
						echo "<input type=\"text\" name=\"profiles[".$id_email."][points_earned]\" placeholder=\"Points Earned\"> \n";
						echo "<textarea name=\"profiles[".$id_email."][comments]\" placeholder=\"Comments\"></textarea></li> \n";
					}
					if($id_course_explode[2] == $_SESSION['id_course']) {
						echo "<li><a href=\"".$website."\" target=\"_blank\">".$name."</a><br>";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_email]\" value=\"".$id_email."\"> \n";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_course]\" value=\"".$id_course_explode[2]."\"> \n";
						echo "<input type=\"text\" name=\"profiles[".$id_email."][points_earned]\" placeholder=\"Points Earned\"> \n";
						echo "<textarea name=\"profiles[".$id_email."][comments]\" placeholder=\"Comments\"></textarea></li> \n";
					}
					if($id_course_explode[4] == $_SESSION['id_course']) {
						echo "<li><a href=\"".$website."\" target=\"_blank\">".$name."</a><br>";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_email]\" value=\"".$id_email."\"> \n";
						echo "<input type=\"hidden\" name=\"profiles[".$id_email."][id_course]\" value=\"".$id_course_explode[4]."\"> \n";
						echo "<input type=\"text\" name=\"profiles[".$id_email."][points_earned]\" placeholder=\"Points Earned\"> \n";
						echo "<textarea name=\"profiles[".$id_email."][comments]\" placeholder=\"Comments\"></textarea></li> \n";
					}
				}
			} else {
				echo "<p>No students found in selected course.</p>";
			}
			$statement->close();
			?>
			</ul>
			<input type="submit" value="Submit">
		</form>
	</body>

</html>
