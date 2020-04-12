<!DOCTYPE html>
<html>

	<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gary Rozanc Teaching Blog</title>
  <meta name="description" content="Gary is an Associate Professor at the University of Maryland, Baltimore County. While Gary loves all things design, he specializes in teaching responsive web and user experience design.
">

  <!--<link rel="stylesheet" href="https://garyrozanc.com/students/css/main.css">-->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="canonical" href="https://garyrozanc.com/students/gradebook/login.php">
  <link rel="alternate" type="application/rss+xml" title="Gary Rozanc Teaching Blog" href="https://garyrozanc.com/students/feed.xml">
</head>

	
	<body id="top">
		
		<div class="wrap">
			<main class="gradebook">	
	<?php 
		include 'db.php';
		
		session_start();
		
		if (!empty($_POST['id_email'])) {		
			$_SESSION['id_email'] = $_POST['id_email'];
		}
		
		if (!empty($_POST['id_password'])) {		
			$_SESSION['id_password'] = sha1($_POST['id_password']);
		}
		
		$result = $mysqli->query("SELECT * FROM students WHERE id_email = '".$_SESSION['id_email']."'");
		$row = mysqli_fetch_assoc($result);
		$result->close();
				
		$_SESSION['name'] = $row['name'];
		
		//if ($row['advisee'] == "1" && $row['id_course'] === NULL) {
		if ($row['id_password'] == NULL && $row['id_course'] != NULL) {
			include('login-warning.php');
		} elseif ($row['id_password'] == $_SESSION['id_password']) {
			header('Location: menu.php');
		} else {
			echo "<section class=\"login-error\"><p>You entered an unknown email address or the wrong password. <a href=\"index.php\" title=\"Login Page\">Please try again.</a></p></section>";
		}
	?>	
	</main>

		
		
		</div>
		
		<!--<script src="https://garyrozanc.com/students/js/plugins.js"></script>-->
		<script src="../js/flowtype.js"></script>
		<script src="../js/page-scroll.js"></script>
		
		<script>
			// Change URL
			var origin = localStorage.getItem('origin');
			var a = document.getElementById('origin');
			if (a) {
				a.href = origin;
			}
		</script>
	
	</body>

</html>
