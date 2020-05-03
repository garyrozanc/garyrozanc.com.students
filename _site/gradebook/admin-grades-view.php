<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body class="dashboard">
		<a href="dashboard-menu.php" class="btn-close"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path class="st0" d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50s50-22.4 50-50C100 22.4 77.6 0 50 0zM80.7 70.1L70.1 80.7c-0.6 0.6-1.5 0.6-2.1 0l-18-18 -18 18c-0.6 0.6-1.5 0.6-2.1 0L19.3 70.1c-0.6-0.6-0.6-1.5 0-2.1l18-18 -18-18c-0.6-0.6-0.6-1.5 0-2.1l10.6-10.6c0.6-0.6 1.5-0.6 2.1 0l18 18 18-18c0.6-0.6 1.5-0.6 2.1 0l10.6 10.6c0.6 0.6 0.6 1.5 0 2.1l-18 18 18 18C81.3 68.6 81.3 69.5 80.7 70.1z"/></svg></a>
		
	<?php 
		include 'db.php';
		
		
		session_start();
		
		if (empty($_SESSION["id_course"])) {	
			$_SESSION['id_course'] = $_POST['id_course'];
		}
		//if (empty($_SESSION["id_email"])) {	
			$_SESSION['id_email'] = $_GET['id_email'];
		//}
		
		//$result = $mysqli->query("SELECT * FROM students WHERE id_email = '".$_SESSION['id_email']."'");
		//$row = mysqli_fetch_assoc($result);
		//$result->close();
		
		$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '".$_SESSION['id_course']."'");
		$row = mysqli_fetch_assoc($result);
		$result->close();
		
		echo "<h1>".$row['course_title']."</h1> \n";
		
		echo "<section>  \n";
		echo "<h2>Attendance</h2> \n";
		echo "<div class=\"late\"> \n";

		$attendance_value = "Late";
		$query = "SELECT count(attendance_value) FROM attendance WHERE id_course = ? AND id_email = ? AND attendance_value = '$attendance_value'";
		$statement = $mysqli->prepare($query);
		$statement->bind_param('ss', $_SESSION['id_course'], $_SESSION['id_email']);
		$statement->execute();
		$statement->bind_result($attendance_count_late);
		
		while($statement->fetch()) {
			if ($attendance_count_late > "0") {
				echo "<h3>".$attendance_count_late." Lates</h3> \n";
			} else {
				echo "<h3>0 Lates</h3> \n";
			}
		}
		$statement->close();

			echo "<ul> \n";
	
				$query = "SELECT attendance_date, attendance_value, attendance_time FROM attendance WHERE id_course = ? AND id_email = ? ORDER BY attendance_date ASC";
				$statement = $mysqli->prepare($query);
				$statement->bind_param('ss', $_SESSION['id_course'], $_SESSION['id_email']);
				$statement->execute();
				$statement->bind_result($attendance_date, $attendance_value, $attendance_time);
				$statement->store_result();
				while($statement->fetch()) {
					if ($attendance_value == "Late") {
				    	echo "<li><b>".date("m.d.y",strtotime($attendance_date))."</b> @ ";
						echo date("h:i a",strtotime($attendance_time))."</li> \n";
				    }
				}
				$statement->close();	           
	
			echo "</ul> \n";
		echo "</div> \n";
		echo "<div class=\"absent\"> \n";

			$attendance_value = "Absent";
			$query = "SELECT count(attendance_value) FROM attendance WHERE id_course = ? AND id_email = ? AND attendance_value = '$attendance_value'";
			$statement = $mysqli->prepare($query);
			$statement->bind_param('ss', $_SESSION['id_course'], $_SESSION['id_email']);
			$statement->execute();
			$statement->bind_result($attendance_count_absent);
			
			while($statement->fetch()) {
				if ($attendance_count_absent > "0") {
					echo "<h3>".$attendance_count_absent." Absences</h3> \n";
				} else {
					echo "<h3>0 Absences</h3> \n";
				}
			}
			$statement->close();
			
		echo "<ul> \n";

			$query = "SELECT attendance_date, attendance_value, attendance_time FROM attendance WHERE id_course = ? AND id_email = ? ORDER BY attendance_date ASC";
			$statement = $mysqli->prepare($query);
			$statement->bind_param('ss', $_SESSION['id_course'], $_SESSION['id_email']);
			$statement->execute();
			$statement->bind_result($attendance_date, $attendance_value, $attendance_time);
			$statement->store_result();
			while($statement->fetch()) {
				if ($attendance_value == "Absent") {
			    	echo "<li><b>".date("m.d.y",strtotime($attendance_date))."</b></li> \n";
			    }
			}
			$statement->close();	            

		echo "</ul> \n";
			echo "</div> \n";
		echo "</section> \n";
		
		echo "<section> \n";
		echo "<h2>Grades</h2> \n";
					
		$query = "SELECT title, url, points_earned, point_total, comments FROM grades WHERE id_course = ? AND id_email = ? ORDER BY title ASC";
		$statement = $mysqli->prepare($query);
		$statement->bind_param('ss', $_SESSION['id_course'], $_SESSION['id_email']);
		$statement->execute();
		$statement->bind_result($assignment_title, $assignment_url, $assignment_points_earned, $assignment_point_total, $assignment_comments);
		$statement->store_result();
		
		if ($statement->num_rows > 0) {
			echo "<ul> \n";
			while($statement->fetch()) {
			    echo "<li><a href=\"".$assignment_url."\" target=\"_blank\">".$assignment_title."</a>: ";
			    echo "<strong>".$assignment_points_earned."/".$assignment_point_total."</strong>";
			    if ($assignment_comments) {
			    		echo "<p><b>Comments:</b> ".$assignment_comments."</p>";
			    }
			    echo "</li> \n";
			}
			echo "</ul> \n";
		} else {
			echo "No grades have been entered yet.";
		}
		$statement->close();	
		
		echo "</section> \n";
		
		echo "<section> \n";
		echo "<h2>Semester Grade</h2> \n";
		$query = "SELECT sum(points_earned), sum(point_total) FROM grades WHERE id_course = ? AND id_email = ?";
		$statement = $mysqli->prepare($query);
		$statement->bind_param('ss', $_SESSION['id_course'], $_SESSION['id_email']);
		$statement->execute();
		$statement->bind_result($points_earned, $point_total);
		
		while($statement->fetch()) {
			if ($point_total >= "0") {
				$grade = round($points_earned / $point_total, 3) * 100;
				if ($attendance_count_absent >= "5") { $absent_penalty = $attendance_count_absent - 4; }
				$grade_penalty = $absent_penalty * .1;
				$grade_penalty = $grade_penalty * 100;
				$grade = $grade - $grade_penalty;
				if ($grade >= "70") { $class = "passing"; } else { $class = "failing"; }
				//$class = "passing";
				echo "<p>If the semester were to end today your final grade for the semester would be <strong class=\"".$class."\">".$grade."%</strong>. This grade reflects penalties for your accumulated absences. Lates have not been factored in yet because quite frankly, I do not know how to program that yet!</p> \n";
			} else {
				echo "Grades have not been entered yet.";
			}
		}
		$statement->close();
		echo "</section> \n";
	?>
		
	</body>

</html>