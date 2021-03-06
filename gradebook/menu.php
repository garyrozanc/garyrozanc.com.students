---
layout: default
permalink: gradebook/menu.php
---

	<main class="gradebook">
		
	<?php 
		include 'db.php';
		session_start();
		unset($_SESSION['id_course']);
	?>
	
		<section class="menu">
			
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
					    		echo "<li><a href=\"gradebook.php?id_course=".$id_course_explode[0]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    if ($id_course_explode[1]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[1]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"gradebook.php?id_course=".$id_course_explode[1]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    	if ($id_course_explode[2]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[2]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"gradebook.php?id_course=".$id_course_explode[2]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					    	if ($id_course_explode[3]) {
							$result = $mysqli->query("SELECT * FROM admin WHERE id_course = '$id_course_explode[3]'");
							$row = mysqli_fetch_assoc($result);
							$result->close();
					    		echo "<li><a href=\"gradebook.php?id_course=".$id_course_explode[3]."\">".$row['course_title']."</a></li>";
					    	}
					    	
					}
				} else {
					echo "<p>Something went really wrong!</p>";
				}
				
				$statement->close();
			?>
			</ul>
			
		</section>
		
	</main>