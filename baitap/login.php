<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	    <title>Calculator-Đăng Nhập</title>    
	    <link type = "text/css" href="style.css" rel="stylesheet"/>
	   <!-- link jquery trên gg dùng mạng chạy -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	    <script>
	    	$(document).ready(function(){
	    		$("#back").click(function() {
	    			location.href="index.php";
	    		});
	    	});
	    </script>
	    <style>
	    	body{
				background-image: url("imag/back.jpg"); 
				}
	    </style>
	</head>
	<body>
		<section class="full-box">
			<h1>FORM LOGIN</h1>
				<article class="box-user">
				<form method="post" style="padding-right: 0.5em; padding-left: 1em;">
						<table>
							<tr>
								<td>Tên Tài Khoản:</td>
								<td><input  type ="varchar" name="username" placeholder="Tên tài khoản"/></td>
							</tr>
							<tr>
								<td>Mật Khẩu:</td>
								<td><input  type="password" name="password" placeholder="Mật khẩu"  /></td>
							</tr>
							
							<tr>
								<td colspan="2" style="text-align: center; padding-top: 0.5em;"><input name="sigin-submit" value="Đăng Nhập" type="submit"/>	<input id="back" value="Quay lại" type="button"/></td>
							</tr>
						</table>
					</form>
					<!-- Header -->
					<header id="header">
					<nav class="left">
					<a href="#menu"><span>Menu</span></a>
					</nav>
						<a href="maytinh.php" </a>
				<nav class="right">
					<a href="login.php" class="button alt">Sign in</a>
					<a href="sigin.php" class="button alt">sign up</a>
					
				</nav>
			</header>
			<?php
						include 'connect.php';
						session_start();

		
						if(isset($_POST['sigin-submit'])){
					
								$usn=$_POST['username'];
								$pass=$_POST['password'];
								if($usn==""||$pass==""){
									echo 'Tên đăng nhập and password của bạn không được để trống';
								}else{
									$pass=md5($pass);
									$sql="select * from userinfo where username='$usn'and password= '$pass'";
									$query=mysqli_query($con,$sql);
									$num_rows=mysqli_num_rows($query);
									if($num_rows!=0){
									
										echo '<p style="text-align: center; padding-top: 1em;"> Tên đăng nhập hoặc mật khẩu không đúng!</p>';
					
									}else{
										
										$_SESSION['username']=$usn;
										header('Location:maytinh.php');
									}
								}
								}
							
					?>
			
		
				</article>
		</section>



	</body>
</html>