<?php
    ob_start();
    session_start();
        require_once('dbconfig/config.php');    //phpinfo();
        if(!isset($_SESSION['username']))
        {
            echo '<script type="text/javascript">alert("Please login first")</script>';
            header("location:index.php");
        }
    if(isset($_POST['typev'])){
    $typev = $_POST['typev'];
}
    /*$plates = $_POST['plates'];
    $remcash = $_POST['remainingcash'];
    $sourcep = $_POST['sourcep'];
    $destinationp = $_POST['destinationp'];
    $notoll = $_POST['notoll'];*/
    echo $typev;
?>
