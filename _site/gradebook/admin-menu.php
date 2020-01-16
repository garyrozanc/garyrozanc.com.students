<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>
	<?php 
		session_start();
		unset($_SESSION['id_course']);
		require 'admin-approve.php';
		include 'db.php';
	?>
		<p>admin-menu.php</p>
		
		<h1>Courses</h1>
		<form method="post" action="admin-attendance.php">
			<select name="id_course">
	            <option value="">Attendance</option>
				<?php		
				$query = "SELECT id_course, course_title, section, year, semester 
						  FROM admin WHERE course_title IS NOT NULL ORDER BY id_course DESC";
				$statement = $mysqli->prepare($query);
				$statement->execute();
				$statement->bind_result($id_course, $course_title, $section, $year, $semester);
				while($statement->fetch()) {
					echo "<option value=\"".$id_course."\">".$course_title." ".$section.": ".$semester." ".$year."</option>";
				}
				$statement->close();
				?>
			</select>
	        <input type="submit" value="submit" >
		</form>
		
		<form method="post" action="admin-grades.php">
			<select name="id_course">
	            <option value="">Grades</option>
				<?php	
				$query = "SELECT id_course, course_title, section, year, semester 
				          FROM admin WHERE course_title IS NOT NULL ORDER BY id_course DESC";
				$statement = $mysqli->prepare($query);
				$statement->execute();
				$statement->bind_result($id_course, $course_title, $section, $year, $semester);
				while($statement->fetch()) {
					echo "<option value=\"".$id_course."\">".$course_title." ".$section.": ".$semester." ".$year."</option>";
				}
				$statement->close();
				?>
			</select>
	        <input type="submit" value="submit" >
		</form>
	
	</body>

</html>