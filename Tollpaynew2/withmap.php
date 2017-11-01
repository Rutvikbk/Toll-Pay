<?php
    ob_start();
    session_start();
        require_once('dbconfig/config.php');    //phpinfo();
        if(!isset($_SESSION['username']))
        {
            echo '<script type="text/javascript">alert("Please login first")</script>';
            header("location:index.php");
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
                <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/new.css">
    </head>
    <body>
        <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/back.jpg');height: 749px;">



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Tollpay</h3>
                    <strong><img src="images/demo/transp.png" height="48px" width="60px" /></strong>
                </div>
                <form>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-user"></i>
                            Logged In
                            <label><?php echo $_SESSION['username'];?></label>
                        </a>
                        
                    </li>
                    <li>
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-warning-sign"></i>
                            Not Using Registered Vehicle?
                        </a>
                        <div class="collapse list-unstyled" id="pageSubmenu">
                            <label>Enter Vehicle License No</label>
                            <input type="text" name="newlno" style="color: black" value="<?php echo $_SESSION['lno'];?>">
                            
                        </div>
                    </li>

                    <li>
                        
                        <a href="#typeofvehicle" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            Type Of Vehicle
                        </a>
                        <ul class="collapse list-unstyled" id="typeofvehicle">
                            <li>SUV<input type="radio" name="type" value="suv"></li>
                            <li>LUV<input type="radio" name="type" value="luv"></li>
                            <li>Heavy   <input type="radio" name="type" value="heavy"></li>
                            
                        </ul>
                    </li>
                    
                </ul>
                <ul class="list-unstyled components">
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-ok"></i>
                            <label>Done</label>
                        </a>
                        
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-lock"></i>
                            <label>Logout</label>
                        </a>
                        
                    </li>
                </ul>
                <ul type="none" id="personal">
                    <li><i class="glyphicon glyphicon-phone"><label><?php echo $_SESSION['mobile'];?></label></i></li>
                    <li><i class="glyphicon glyphicon-envelope"><label><?php echo $_SESSION['email'];?></label></i></li>
                    <li><i class="glyphicon glyphicon-euro"><label><?php echo $_SESSION['cash'];?></label></i></li>
                </ul>

                
            </form>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Travel Details</span>
                            </button>
                            
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><label>Source</label></li>
                                <li><input type="text" name="source" /></li>
                                <li><label>Destination</label></li>
                                <li><input type="text" name="destination" /></li>
                                <li><button type="submit" name="go" id="go" style="background: #84cc6d; border-radius: 8px;">Go</button></li>
                            </ul>
                        </form>
                        </div>

                        
                    </div>
                    
                </nav>

                
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
<?php
    ob_end_flush();
?>