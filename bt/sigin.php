<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	    <title>Calculator-Đăng Kí</title>    
	    <link type = "text/css" href="css/style.css" rel="stylesheet"/>
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
				background-image: url("back.jpg"); 
				}
	    </style>
	</head>
	<body>
		<section class="full-box">
			<h1>FORM SIGNIN</h1>
				<article class="box-user">
					<form method="post" style="padding-right: 0.5em; padding-left: 1em";>
						<table>
							<tr>
								<td>ID:</td>
								<td><input name="id" placeholder="Mã ID"/></td>
							</tr>
							<tr>
								<td>Tên Tài Khoản:</td>
								<td><input name="username" placeholder="Tên tài khoản"/></td>
							</tr>
							<tr>
								<td>Mật Khẩu:</td>
								<td><input name="password" placeholder="Mật khẩu" type="password"/></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input name="email" placeholder="email"/></td>
							</tr>
							<tr>
								<td>Phone:</td>
								<td><input name="phone" placeholder="Số điện thoại"/></td>
							</tr>
							<tr>
								<td>Giới Tính:</td>
								<td><input name="gioitinh" value="Nam" type="radio"/>Nam <input name="gioitinh" value="Nữ" type="radio"/>Nữ</td>
							</tr>
							<tr>
								<td colspan="2" style="text-align: center;padding-top: 0.5em;"><input name="sign-submit" value="Đăng ký" type="submit"/>	<input id="back" value="Quay lại" type="button"/></td>
							</tr>
						</table>
					</form>
					<?php
						include 'connect.php';
						if(isset($_POST['sign-submit'])){
							$id=$_POST['id'];
							$username=$_POST['username'];
							$password=$_POST['password'];
							$email=$_POST['email'];
							$phone=$_POST['phone'];
							$gioitinh=$_POST['gioitinh'];
							if($id==""||$username==""||$password==""||$email==""||$phone==""||$gioitinh=="")
								{
								echo '<p style="text-align: center; padding-top: 1em;">Hãy nhập đầy đủ thông tin !</p>';
								} else {
									$password=md5($password);
									$sql="INSERT INTO 'userinfo'('id','username', 'password', 'email', 'phone', 'gioitinh') VALUES('$id','$username','$password','$email','$phone','$gioitinh')";
									$query=mysqli_query($con,$sql);
									if($query!=0){
										echo '<p style="text-align: center; padding-top: 1em;">Bạn đã đăng nhập thành công !</p>';
									} else{
										echo '<p style="text-align: center; padding-top: 1em;">Bạn đã đăng nhập không thành công !</p>';
									}
								}
						}
					?>
				</article>
		</section>



	</body>
</html>