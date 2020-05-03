<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>	
		<p>admin-grades-view-menu.php</p>
		<p><a href="admin-menu.php">Back to admin-menu.php</a></p>
		
		<?php
		session_start();
		if (!empty($_POST['id_course'])) {		
			$_SESSION['id_course'] = $_POST['id_course'];
		}
		require 'admin-approve.php';
		include 'db.php';
		$todays_date = date("Y-m-d");
		?>
			
	    <h1>View Student&rsquo;s Grade</h1>
	    
	    <form action="admin-grades-view.php" method="post">
			<?php
				$query = "SELECT name, id_email, id_course FROM students ORDER BY name ASC";
				$statement = $mysqli->prepare($query);
				$statement->execute();
				$statement->bind_result($name, $id_email, $id_course);
				$statement->store_result();
				
				if ($statement->num_rows > 0) {
						while($statement->fetch()) {
							$id_course_explode = explode(',', $id_course);
							echo "<ul>";
							if($id_course_explode[0] == $_SESSION['id_course']) {
							   echo "<li><a href=\"admin-grades-view.php?id_email=".$id_email."\">".$name."</a></li>";
						    }
							echo "</ul>";
							
							/*
							if($id_course_explode[0] == $_SESSION['id_course']) {
							    echo "<p><select name=\"id_email[]\">";
							    echo "<option value=\"\">".$name."</OPTION>";
							    echo "<option value=\"".$id_email."|Present\">".$name." - Present </option>";
							    echo "<option value=\"".$id_email."|Absent\">".$name." - Absent </option>";
							    echo "</select></p>";
						    }
						    if($id_course_explode[1] == $_SESSION['id_course']) {
							    echo "<p><select name=\"id_email[]\">";
							    echo "<option value=\"\">".$name."</OPTION>";
							    echo "<option value=\"".$id_email."|Present\">".$name." - Present </option>";
							    echo "<option value=\"".$id_email."|Absent\">".$name." - Absent </option>";
							    echo "</select></p>";
						    }
							if($id_course_explode[2] == $_SESSION['id_course']) {
							    echo "<p><select name=\"id_email[]\">";
							    echo "<option value=\"\">".$name."</OPTION>";
							    echo "<option value=\"".$id_email."|Present\">".$name." - Present </option>";
							    echo "<option value=\"".$id_email."|Absent\">".$name." - Absent </option>";
							    echo "</select></p>";
						    }
							if($id_course_explode[3] == $_SESSION['id_course']) {
							    echo "<p><select name=\"id_email[]\">";
							    echo "<option value=\"\">".$name."</OPTION>";
							    echo "<option value=\"".$id_email."|Present\">".$name." - Present </option>";
							    echo "<option value=\"".$id_email."|Absent\">".$name." - Absent </option>";
							    echo "</select></p>";
						    }
						    */
						}
				} else {
					echo "<p>No students found in selected course.</p>";
				}
				$statement->close();
			?>
			<input type="submit" value="submit" >
		</form>

	</body>

</html>
