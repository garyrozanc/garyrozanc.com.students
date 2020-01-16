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
  <link rel="canonical" href="https://garyrozanc.com/students/gradebook/index.php">
  <link rel="alternate" type="application/rss+xml" title="Gary Rozanc Teaching Blog" href="https://garyrozanc.com/students/feed.xml">
</head>

	
	<body id="top">
		
		<div class="wrap">
				<main class="gradebook">
			<h1>Login</h1>
			<form action="login.php" method="post" class="login-form">
				<label for="id_email">Campus Email</label>
				<input type="text" name="id_email" id="id_email" tabindex="1" autocomplete="off" placeholder="email@umbc.edu" required>
				<label for="id_password">Password</label>
				<input type="password" name="id_password" id="id_password" tabindex="2" autocomplete="off" placeholder="Enter your Campus ID or Password" required>
				<input type="submit" value="Submit">
			</form>
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
