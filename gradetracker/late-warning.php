<!doctype html>
<!-- Step 01 -->
<html class="login no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body class="login">
		
		<section class="login-form">
			<?php session_start(); ?>
			
			<a href="dashboard.php" class="btn-close"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path class="st0" d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50s50-22.4 50-50C100 22.4 77.6 0 50 0zM80.7 70.1L70.1 80.7c-0.6 0.6-1.5 0.6-2.1 0l-18-18 -18 18c-0.6 0.6-1.5 0.6-2.1 0L19.3 70.1c-0.6-0.6-0.6-1.5 0-2.1l18-18 -18-18c-0.6-0.6-0.6-1.5 0-2.1l10.6-10.6c0.6-0.6 1.5-0.6 2.1 0l18 18 18-18c0.6-0.6 1.5-0.6 2.1 0l10.6 10.6c0.6 0.6 0.6 1.5 0 2.1l-18 18 18 18C81.3 68.6 81.3 69.5 80.7 70.1z"/></svg></a>
			
			<p><strong>Full Disclosure:</strong> to confirm you are updating your absence from the classroom, this website uses Geolocation. The Geolocation API allows the web browser to detect the address you are checking in from. By clicking “Begin Checkin” your current approximate street address will be recorded.</p>
			
			<p>If you haven’t already, you will need to enable your browser’s Geolocation feature for this website when prompted.</p>
				
			<p><a href="late.php">Begin Checkin</a></p> 
		</section>
		
	</body>

</html>
