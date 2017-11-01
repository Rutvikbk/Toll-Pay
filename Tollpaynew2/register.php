<?php
	ob_start();
    session_start();
	require_once('dbconfig/config.php');	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Validation Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/register.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body style="background-image:url('images/demo/backgrounds/back.jpg'); background-size: cover;height: 100%">
    
   <CENTER><a href="index.php"><img src="images/demo/transp.png" height="200px" width="270px"/></a></CENTER>
    


    <div class="main-content">

        <!-- You only need this form and the form-validation.css -->

        <form class="form-validation" method="post" action="register.php">

            <div class="form-title-row">
                <h1>Registration</h1>
            </div>

            <div class="form-row form-input-name-row">

                <label>
                    <span>Username</span>
                    <input type="text" name="username" id="username" required="required">
                </label>

                <!--
                    Add these three elements to every form row. They will be shown by the
                    .form-valid-data and .form-invalid-data classes (see the JS for an example).
                -->

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>


            <div class="form-row form-input-Licenseno-row">

                <label>
                    <span>License Plate Number</span>
                    <input type="text" name="lno" id="lno" required="required">
                </label>

                <!--
                    Add these three elements to every form row. They will be shown by the
                    .form-valid-data and .form-invalid-data classes (see the JS for an example).
                -->

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>


            <div class="form-row form-input-DOB-row">

                <label>
                    <span>Mobile</span>
                    <input type="number" name="mobile" id="mobile" required="required">
                </label>

                <!--
                    Add these three elements to every form row. They will be shown by the
                    .form-valid-data and .form-invalid-data classes (see the JS for an example).
                -->

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>

            <div class="form-row form-input-email-row">

                <label>
                    <span>Email</span>
                    <input type="email" name="email" placeholder="email@example.com" id="email" required="required">
                </label>

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>

            <div class="form-row form-input-password-row">

                <label>
                    <span>Password</span>
                    <input type="password" name="password" id="password" required="required">
                </label>

                <!--
                    Add these three elements to every form row. They will be shown by the
                    .form-valid-data and .form-invalid-data classes (see the JS for an example).
                -->

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>


            <div class="form-row form-input-cpassword-row">

                <label>
                    <span>Confirm Password</span>
                    <input type="password" name="cpassword" id="cpassword" required="required">
                </label>

                <!--
                    Add these three elements to every form row. They will be shown by the
                    .form-valid-data and .form-invalid-data classes (see the JS for an example).
                -->

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span>

                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>



            <div class="form-row">

                <button type="submit" name="register">Submit Form</button>

            </div>

        </form>

    </div>
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				@$lno=$_POST['lno'];
				@$email=$_POST['email'];
				@$mobile=$_POST['mobile'];

				if($password==$cpassword)
				{
					$query = "select * from info where name='$username'";
					//echo $query;
				    $query_run = mysqli_query($con,$query);
				    //echo mysql_num_rows($query_run);
				    if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into info values('$username','$password','$lno','$email','$mobile','5000')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								//echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
                                $_SESSION['lno'] = $lno;
                                $_SESSION['email'] = $email;
                                $_SESSION['mobile'] = $mobile;
                                $_SESSION['cash'] = 5000;

                                header("location:gg2.php");	     
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
            ob_end_flush();
		?>
</body>
</html>