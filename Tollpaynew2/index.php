<?php
	ob_start();
	session_start();
	require_once('dbconfig/config.php');	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>TollpAY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/final1.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-user"></i> <a href="register.php">Register</a></li>
        <li><i class="fa fa-sign-in"></i> <a href="pages/signup.html">Login</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/back.jpg');height: 800px;"> 
  <div class="wrapper row1">
    <div id="logopos" class="fl_left">
        <h1><a href="index.php">TollpAY</a></h1>
      </div>
    <header id="header" class="hoc clear"> 
       <div id="logo" class="fl_left">
        <img src="images\demo\transp.png">
      </div>
     <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#whytollpay">Why Tollpay</a>
          </li>
          <li><a class="drop" href="#aboutus">About Us</a>
            <ul>
              <li><a href="#aboutus">Reuel</a></li>
              <li><a href="#aboutus">Rutvik</a>
              </li>
              <li><a href="#aboutus">Sebin</a></li>
            </ul>
          </li>
          <li><a href="#contactinfo">Contact Info</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 

    <div class="logfrm">
      <img src="images/demo/transp.png" class="userr">
      <h2 style="text-align: center;margin-left:-55px;" id="lol1">Login</h2>
      <form method="post" action="index.php">
        <input type="text" name="username" placeholder="Please Enter your UserName..." required><br>
        <input type="password" name="password" placeholder="Please Enter your Password..." required><br>
        <input type="submit" value="Login" name="login" id="login" style="text-align: center;margin-left:65px;">
      </form>
    </div>



    <article>
      <h2 class="heading">Paying toll online </h2>
      <p>since NOW...</p>
      
    </article>
</div>
</div>
<div class="wrapper row3" id="whytollpay" style="background-color: black;">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_third first"><a href="#"><img src="images/demo/group.jpg" alt="" style="height: 270px;margin-top: 50px;"></a></div>
      <div class="two_third">
        <div class="btmspace-50">
          <h3 class="heading">Why TollPay?</h3>
          <p class="nospace">To help speed up the process of toll paying reducing the traffic and making life a bit easier by helping you pay your tolls remotely. </p>
        </div>
        <ul class="fa-ul clear">
          <li class="one_half first"><i class="fa-li fa fa-globe"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">MOTTO</a></h6>
            <p>Making Life Simpler</p>
          </li>
          <li class="one_half"><i class="fa-li fa fa-unlink"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">FUTURE PROSPECTS</a></h6>
            <p>An automatic Toll payment implemented in our country</p>
          </li>
          <li class="one_half first"><i class="fa-li fa fa-whatsapp"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">SUGGESTIONS?</a></h6>
            <p>Feel free to contact us with advice or any feedback using the info given at the end of the page</p>
          </li>
          <li class="one_half"><i class="fa-li fa fa-ils"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">SUPPORT US!</a></h6>
            <p>Support us if you feel our idea can help your lives become easier.</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
  
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" id="aboutus">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-80 center">
      <h3 class="nospace">About Us</h3>
      <p class="nospace">Students from St. Francis Institute of Technology </p>
    </div>
    <div class="group">
      <article class="one_third first">
       <!--  <time class="block font-xs" datetime="2045-04-06">April 6, 2045</time> -->
        <h4 class="nospace font-x1">Reuel Lemos</h4>
        <p class="btmspace-30">The All Rounder
        </p>
        <a href="#"><img class="btmspace-30" src="images/demo/reuel.jpg" alt="" style="border-radius: 47%;height: 230px;"></a>
        
      </article>
      <article class="one_third">
        <!-- <time class="block font-xs" datetime="2045-04-05">April 5, 2045</time> -->
        <h4 class="nospace font-x1">Rutvik Kakadiya</h4>
        <p class="btmspace-30">The One in Love with BackENd</p>
        <a href="#"><img class="btmspace-30" src="images/demo/rutvik.jpeg" alt="" style="border-radius: 47%;height: 230px;"></a>
       
      </article>
      <article class="one_third">
        <!-- <time class="block font-xs" datetime="2045-04-04">April 4, 2045</time> -->
        <h4 class="nospace font-x1">Sebin Mangalan</h4>
        <p class="btmspace-30">The Creative Guy</p>
        <a href="#"><img class="btmspace-30" src="images/demo/sebin.jpeg" alt="" style="border-radius: 47%;height: 230px;width: 170px;"></a>
        
      </article>
      
      
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<div class="wrapper row4" id="contactinfo">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h2 class="title"><i class="fa fa-home" aria-hidden="true" style="font-size: 50px;text-align: center;"></i></h2>
      <address class="btmspace-30">
      <i class="fa fa-map-marker" aria-hidden="true" tyle="font-size: 20px;"></i>&nbsp;&nbsp;SFIT  Borivali<br>
        &nbsp;&nbsp;&nbsp;Mumbai<br>
      &nbsp;&nbsp;&nbsp;400103
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><i class="fa fa-phone"></i> 022 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@tollpay.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Augue suspendisse</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Vestibulum augue at</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Maximus aliquet neque ac luctus elit praesent imperdiet dui arcu a feugiat tellus interdum ut aliquam.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Sagittis interdum</h6>
      <ul class="nospace linklist">
        <li><a href="#">Quis justo luctus sodales</a></li>
        <li><a href="#">Id commodo enim vivamus</a></li>
        <li><a href="#">Mattis nisl et interdum</a></li>
        <li><a href="#">Non urna a eros cursus</a></li>
        <li><a href="#">Rutrum eleifend posuere</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Phasellus ac risus</h6>
      <p>Venenatis mauris in hendrerit posuere proin lacus massa luctus id iaculis id viverra.</p>
      <p>Vestibulum nisi nullam vestibulum felis quis fringilla tincidunt nulla dapibus lectus.</p>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">TollpAY</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>

<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				
				$query = "select * from info where name='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
          $_SESSION['lno'] = $row['license'];
          $_SESSION['email'] = $row['emailid'];
          $_SESSION['cash'] = $row['cash'];
          $_SESSION['mobile'] = $row['mobile'];
				    header( "location:gg2.php");
					}  
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
			?>
