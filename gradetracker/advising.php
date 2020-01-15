---
layout: default
permalink: gradetracker/advising.php
---

	<main class="gradetracker advising">	
	
		<a href="menu.php" class="btn-close"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path class="st0" d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50s50-22.4 50-50C100 22.4 77.6 0 50 0zM80.7 70.1L70.1 80.7c-0.6 0.6-1.5 0.6-2.1 0l-18-18 -18 18c-0.6 0.6-1.5 0.6-2.1 0L19.3 70.1c-0.6-0.6-0.6-1.5 0-2.1l18-18 -18-18c-0.6-0.6-0.6-1.5 0-2.1l10.6-10.6c0.6-0.6 1.5-0.6 2.1 0l18 18 18-18c0.6-0.6 1.5-0.6 2.1 0l10.6 10.6c0.6 0.6 0.6 1.5 0 2.1l-18 18 18 18C81.3 68.6 81.3 69.5 80.7 70.1z"/></svg></a>
	
		<h2>Advising Appointments</h2>
		<p>Available appointments are green, and your appointments are in gray. Simply click on your appointment to cancel it.</p> 
		<ul class="appointments">
	
		<?php
		include 'db.php';
		session_start();
		
	    $date = date("Y-m-d H:i");
	    
	    if (isset($_REQUEST['book'])) { 
		    $id = $_POST['id'];
		    $mysqli->query("UPDATE appointments
		    					SET name = '".$_SESSION['name']."',
								id_email = '".$_SESSION['id_email']."', 
								appointment_booked = '1' 
							WHERE id = '$id'");
	    }
	    
	    if (isset($_REQUEST['cancel'])) {
		    $id = $_POST['id'];
		    $mysqli->query("UPDATE appointments SET appointment_booked = '0' WHERE id = '$id'");
	    }
	
		//create a prepared statement
		$query = "SELECT id, id_email, appointment_date, appointment_time, appointment_booked 
				  FROM appointments 
				  WHERE CONCAT(appointment_date,' ',appointment_time) >= ? 
				  ORDER BY appointment_date ASC, appointment_time ASC";
		$statement = $mysqli->prepare($query);
		$statement->bind_param('s', $date); //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->execute();
		$statement->bind_result($id, $id_email, $appointment_date, $appointment_time, $appointment_booked);
		
		while($statement->fetch()) {
			echo "<li class=\"advising-appointment\"> \n";
				if ($appointment_booked == '1' && $_SESSION['id_email'] != $id_email) {
					echo "<div class=\"unavailable\"> \n";
				} elseif ($appointment_booked == '1' && $_SESSION['id_email'] == $id_email) {
					echo "<div class=\"cancel\"> \n";
				} else {
					echo "<div class=\"book\"> \n";
				}
						echo "<span class=\"date\">".date("m.d.y",strtotime($appointment_date))."</span> \n";
						echo "<span class=\"day\">".date('D',strtotime($appointment_date))."</span> \n";
						echo "<span class=\"time\">".date("g:ia",strtotime($appointment_time))."</span> \n";
						
						if ($appointment_booked == '0') {
							?><form action="advising.php" method="post">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<input type="submit" name="book" id="book" value="Book">
							</form><?php
						}
						if ($appointment_booked == '1' && $_SESSION['id_email'] == $id_email) {
							?><form action="advising.php" method="post">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<input type="submit" name="cancel" id="cancel" value="Cancel">
							</form><?php
						}				
					echo "</div> \n";
			echo "</li> \n";
		}
		
		$statement->close();
		?>
		
		</ul>
		
	</main>