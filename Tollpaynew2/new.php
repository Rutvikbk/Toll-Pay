<?php
    ob_start();
    session_start();
        require_once('dbconfig/config.php');    //phpinfo();
        if(!isset($_SESSION['username']))
        {
            echo '<script type="text/javascript">alert("Please login first")</script>';
            header("location:index.php");
        }
    @$typev=$_POST['typereu'];
    @$plates=$_POST['newlno'];
    @$remcash=$_POST['remcash'];
    @$source1=$_POST['source1'];
    @$dest1=$_POST['dest1'];
    @$notols=$_POST['notols'];
    @$usern=$_SESSION['username'];
    $_SESSION['cash'] = $remcash;
    $query = "update info set cash=$remcash where name='$usern'";
    $query_run = mysqli_query($con,$query);
    /*if($query_run)
                            {
                                echo '<script type="text/javascript">alert("Money Deducted")</script>';
                            }
                            else
                            {
                                echo '<p class="bg-danger msg-block">Payment due to server error. Please try later</p>';
                            }*/
    $query = "insert into tollpaid(lno,tolls,source,destination,type) values('$plates','$notols','$source1','$dest1','$typev')";
    $query_run = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="qrcode.js"></script>


        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
                <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/abc.css">
    </head>
    <body>
        <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/back.jpg');height: 749px;">



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="gg2.php">Tollpay</a></h3>
                    <strong><a href="gg2.php"><img src="images/demo/transp.png" height="48px" width="60px" /></a></strong>
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
                        <a>
                        <label> <i class="glyphicon glyphicon-ok-sign" style="color: #7bbd69;"></i>
                           <?php echo $plates;?></label>
                           <input type="text" name="reuelpro" id="reuelpro"  style="display: none" value="<?php echo $plates;?>">
                        </a>
                        
                        
                    </li>
                    
                </ul>
                <ul class="list-unstyled components">
                    <!-- <li>
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-ok"></i>
                            <label>Done</label>
                        </a>
                        
                    </li> -->
                    <li id="logoutt">
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-off"></i>
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
                            <ul class="nav navbar-nav navbar-left" style="padding-left: 70px;">
                                <!-- <li><label>Source</label></li> -->
                                <li><label><i class="glyphicon glyphicon-road" style="color: white;"></i></label></li>
                                <li><label><?php echo $source1;?></label></li>
                                <li><label>to</label></li>
                                <!-- <li><label>Destination</label></li> -->
                                <li><label><?php echo $dest1;?></label></li>
                                </ul>
                        </form>
                        </div>

                        
                    </div>
                    <div id="qrcode" style="width:100%; height:30px;background-color: white;opacity: 0.0001"></div>
                    <div id="code" style="width: 170px;background-color: white;padding: 20px;margin-left: 300px;margin-top: 30px;opacity: 0.8;"></div>

                </nav>
                    
                
            </div>

        </div>

        <script language="JavaScript">
  function processForm()
  {
    var parameters = document.getElementById('reuelpro').value;
    var temp = document.getElementById('reuelpro').value
    l = document.getElementById('reuelpro').value
    /*alert(l);*/ //Dialog with the text you put on the textbox
    var qrcode = new QRCode(document.getElementById("qrcode"), {
    width : 100,
    height : 100
    });
  }
  processForm();
  //new QRCode(document.getElementById("code"), l);

  var qrcode = new QRCode(document.getElementById("code"), {
    text: l,
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
//new QRCode(document.getElementById("code"), "89348945924902390903248989023490234");
</script>
<script>
document.getElementById("logoutt").addEventListener("click", loog);
        function loog() {
            location.href = 'logout.php';
        }

</script>



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