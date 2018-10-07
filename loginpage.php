
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login </title>
	<link rel="stylesheet" href="css/stylelogin.css">

</head>
<body>
	<div class="container">
		<div class="head">
            <h1 style="color: blue ;text-align:center;">Sardar Vallabhbhai  National  Institute Of Technology</h1>
             <img src="Logo.jpg" width="120px;">
            <h1 style="margin-top: 35px ;text-align: center;">Student Registration System</h1>          
        </div>
		<div class="login-box">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form action="includes/login.inc.php" method="POST">
            <label for="adno">Admission Number</label>
			<br>
			<input type="text" id="adno" name="adno" required>
			<br>
			<label for="password">Password</label>
			<br>
			<input type="password" id="password" name="pwd" required>
			<br>
			<button type="submit" name="submit">Sign In</button>
			<br>
			<a href="signup.php"><p class="small">Register here</p></a>
            </form>
		</div>
	</div>
</body>

</html>