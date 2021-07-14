<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="/action_page.php" onsubmit="return validateinput()">
				<img src="img/avatar.svg">
				<h2 class="title">Xin Chào</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" onclick="clearErormessage()" class="form-control" id="email" name="email" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="form-control" id="pwd"  name="pwd" >
            	   </div>
            	</div>
            	<p id="message"> </p>
            	<input type="submit" class="btn btn-default" value="Đăng nhập">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
