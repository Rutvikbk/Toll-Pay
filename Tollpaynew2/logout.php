<?php
	session_start();
		require_once('dbconfig/config.php');	//phpinfo();
		if(!isset($_SESSION['username']))
		{
			echo '<script type="text/javascript">alert("Please login first")</script>';
			header("location:index.php");
		}
?>
<?php
			
				session_destroy();
				unset($_SESSION['username']); 
				header('location:index.php');
			
?>