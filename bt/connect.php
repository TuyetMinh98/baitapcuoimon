<?php

	$con = mysqli_connect("localhost", "root","","calculator");

	$sql = "select * from userinfo";
   
    $qr = mysqli_query($con,$sql);
    
?>