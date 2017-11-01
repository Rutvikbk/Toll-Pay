<?php
   $con=mysqli_connect("127.0.0.1","root","","tollpay");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $id = $_GET['id'];
   $result = mysqli_query($con,"delete from tollpaid where lno='$id'");
   
   mysqli_close($con);
?>