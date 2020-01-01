<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>
		<?php
		    session_start();
		    if(isset($_POST['login'])) {
		        $password = sha1($_POST['pswd']);
		        if ( $password == "5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8" ) {
		            $_SESSION['phplogin'] = true;
		            header('Location: admin-menu.php');
		            exit;
		    } else {
				?>
				<script type="text/javascript">
				    alert('Wrong Password, Please Try Again')
				</script>
				<?php
		        }
		    }
		?>
		<h1>Admin Login</h1>
        <form method="post" action="">
            <input type="password" placeholder="Password" name="pswd"><br/>
            <input type="submit" name="login" value="Login">
        </form>
	</body>

</html>





	    
		    