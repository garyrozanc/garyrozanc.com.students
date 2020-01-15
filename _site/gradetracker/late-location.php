
<!-- Step 03 -->

<?php
	
	include 'db.php';
	include 'api.php';
	session_start();
	
	$todays_date = date("Y-m-d");
	$attendance_time = date("G:i:s");	

	if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
	    //Send request and receive json data by latitude and longitude
	    $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false&key='.$api_location;
	    $json = @file_get_contents($url);
	    $data = json_decode($json);
	    $status = $data->status;
	    if($status=="OK"){
	        //Get address from json data
	        $location = $data->results[0]->formatted_address;
	    } else {
	        $location =  'Was not able to retrieve location.';
	    }
	    
	    //Print address
	    echo "<p>".$location."</p>";
			
		$query = "SELECT id, attendance_date, attendance_value FROM attendance WHERE id_course = ? AND id_email = ? AND attendance_date = ?";
		$statement = $mysqli->prepare($query);
		$statement->bind_param('sss', $_SESSION['id_course'], $_SESSION['id_email'], $todays_date);
		$statement->execute();
		$statement->bind_result($id, $attendance_date, $attendance_value);
		$statement->store_result();
		while($statement->fetch()) {
			if ($attendance_value == "Absent") {
				echo "<p>You can update the following absence.</p>";
		    		echo "<p>".date("m.d.y",strtotime($attendance_date));
		    		echo "<form action=\"late-update.php\" method=\"post\">";
		    		echo "<input type=\"hidden\" name=\"attendance_time\" value=\"".$attendance_time."\">";
		    		echo "<input type=\"hidden\" name=\"location\" value=\"".$location."\">";
				echo "<input type=\"hidden\" name=\"id\" value=\"".$id."\">";
				echo "<input type=\"submit\" name=\"checkin\" id=\"checkin\" value=\"Checkin\">";
				echo "</form></p>";  		
		    } else {
			    echo "<p>Attendance has not been taken for class ".date("l, M d")." as of ".date("g:i a").".</p>";
		    }
		}
		$statement->close();	
    	}
?>