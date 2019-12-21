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
		<section class="full-box" style="min-height: 14em;">
			<h1>FORM SIGNIN</h1>
				<article class="box-user">
					<form method="post" style="padding-right: 0.5em; padding-left: 1em";>
						<table>
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
								<td colspan="2" style="text-align: center;padding-top: 0.5em;"><input name="sigin-submit" value="Đăng ký" type="submit"/>	<input id="back" value="Quay lại" type="button"/></td>
							</tr>
						</table>
					</form>
				</article>
		</section>



	</body>
</html>