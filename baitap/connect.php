<?php

	$dbhost = 'localhost'; 
   $dbuser = 'root'; 
   $dbpass = ''; 
	$con = mysqli_connect($dbhost,$dbuser ,$dbpass,'calculator')or ('unable to connect to host.check your connections');;

	$sql = "select * from userinfo";
   
    $qr = mysqli_query($con,$sql);
    
?>