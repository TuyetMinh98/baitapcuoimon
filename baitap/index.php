<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
	    <title>Calculator-Trang Chủ</title>    
	    <link type = "text/css" href="style.css" rel="stylesheet"/>
	   <!-- link jquery trên gg dùng mạng chạy -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	    <script>
	    	$(document).ready(function(){
	    		$("#login").click(function(){
	    			location.href="login.php";
	    		});
	    		$("#sigin").click(function() {
	    			location.href="sigin.php";
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
			<h1>FORM USER</h1>
				<article class="box-user">
					<h2>WELCOME</h2>
					<img src="imag/login.png"/>
					<div><button id="login">Đăng nhập</button> HOẶC <button id="sigin">Đăng ký</button></div>
				</article>
		</section>



	</body>
</html>