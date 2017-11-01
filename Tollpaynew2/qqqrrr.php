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
<link href="layout/styles/layout1.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
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
        <h1><a href="index.html">TollpAY</a></h1>
      </div>
    <header id="header" class="hoc clear"> 
       <div id="logo" class="fl_left">
        <img src="images\demo\transp.png">
      </div>
     <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 

    <div class="logfrm">
      <img src="images/demo/transp.png" class="userr">
      <h2 style="text-align: center;margin-left:-55px;">Login</h2>
      <form method="post" action="index.php">
        <input type="text" name="username" placeholder="Please Enter your UserName..." required><br>
        <input type="password" name="password" placeholder="Please Enter your Password..." required><br>
        <input type="submit" value="Login" name="login" style="text-align: center;margin-left:65px;">
      </form>
    </div>



    <article>
      <h2 class="heading">Paying toll </h2>
      <p>Ut eu viverra sem ultricies bibendum leo ut mollis</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Ullamcorper</a></li>
          <li><a class="btn inverse" href="#">Tincidunt</a></li>
        </ul>
      </footer>
    </article>
</div>
</div>
<div class="wrapper row3" style="background-color: black;">
  <main class="hoc container clear"> 
    <div class="group">
      <div class="one_third first"><a href="#"><img src="images/demo/400x500.png" alt=""></a></div>
      <div class="two_third">
        <div class="btmspace-50">
          <h3 class="heading">Eget egestas odio donec</h3>
          <p class="nospace">Praesent urna turpis semper non eros sed accumsan venenatis felis donec rhoncus tincidunt arcu sit amet aliquet vestibulum imperdiet laoreet sapien quis molestie integer tincidunt mauris at placerat congue lectus justo.</p>
        </div>
        <ul class="fa-ul clear">
          <li class="one_half first"><i class="fa-li fa fa-globe"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">Gravida nisl</a></h6>
            <p>Lacus vel eros imperdiet odio sed porta arcu luctus aliquam.</p>
          </li>
          <li class="one_half"><i class="fa-li fa fa-unlink"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">At aenean mattis</a></h6>
            <p>Eros vitae tristique bibendum proin justo vel tortor feugiat.</p>
          </li>
          <li class="one_half first"><i class="fa-li fa fa-whatsapp"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">Leo mi elementum</a></h6>
            <p>Ac sem sed malesuada vehicula mi quisque eget tortor quam.</p>
          </li>
          <li class="one_half"><i class="fa-li fa fa-ils"></i>
            <h6 class="heading btmspace-10 font-x1"><a href="#">Nec eget vulputate</a></h6>
            <p>Efficitur diam fusce ac felis metus sem quam fermentum iaculis.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="btmspace-80 center">
      <h3 class="nospace">Eget vehicula sapien</h3>
      <p class="nospace">A lacus blandit sodales mi a facilisis quam cras tincidunt.</p>
    </div>
    <div class="group">
      <article class="one_quarter first">
        <time class="block font-xs" datetime="2045-04-06">April 6, 2045</time>
        <h4 class="nospace font-x1">Auctor nulla lectus</h4>
        <p class="btmspace-30">Feugiat ac praesent dignissim metus ut tellus convallis non varius nulla accumsan&hellip;</p>
        <a href="#"><img class="btmspace-30" src="images/demo/380x320.png" alt=""></a>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
      <article class="one_quarter">
        <time class="block font-xs" datetime="2045-04-05">April 5, 2045</time>
        <h4 class="nospace font-x1">Augue congue et</h4>
        <p class="btmspace-30">Venenatis nec porttitor vel metus phasellus venenatis ex ac bibendum dictum&hellip;</p>
        <a href="#"><img class="btmspace-30" src="images/demo/380x320.png" alt=""></a>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
      <article class="one_quarter">
        <time class="block font-xs" datetime="2045-04-04">April 4, 2045</time>
        <h4 class="nospace font-x1">Libero justo luctus</h4>
        <p class="btmspace-30">Sed congue odio venenatis fusce purus quam lacinia sed sem a viverra mollis&hellip;</p>
        <a href="#"><img class="btmspace-30" src="images/demo/380x320.png" alt=""></a>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
      <article class="one_quarter">
        <time class="block font-xs" datetime="2045-04-03">April 3, 2045</time>
        <h4 class="nospace font-x1">Luctus consequat</h4>
        <p class="btmspace-30">Eget sed blandit eros semper vulputate lorem a efficitur purus aenean leo&hellip;</p>
        <a href="#"><img class="btmspace-30" src="images/demo/380x320.png" alt=""></a>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
    </div>
  </section>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="title">Mauris ut tempus</h6>
      <address class="btmspace-30">
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
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
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
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
