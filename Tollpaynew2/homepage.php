<?php
	session_start();
		require_once('dbconfig/config.php');	//phpinfo();
		if(!isset($_SESSION['username']))
		{
			echo '<script type="text/javascript">alert("Please login first")</script>';
			header("location:index.php");
		}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
		
		<form method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit" name="logout">Log Out</button>	
			</div>
		</form>
	</div>

	<?php
			if (isset($_POST['logout']))
			{
				session_destroy();
				unset($_SESSION['username']); 
				header('location:index.php');
			}
	?>
</body>
</html>