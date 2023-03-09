
<!DOCTYPE HTML>
<html>
<head>
	<title>Crown Fabric</title>
	<link rel = "stylesheet" href = "login.css"></link>
</head>
<body>
	<div class = "container">
		<header>
			<nav>
				<div class = "logo">
					<img src = "logo.png" style = "width: 60px; height: 60px; margin: -10px;">
				</div>
				<div class = "menu">
					<ul>
					<li>HOME</li>
					<li>ABOUT</li>
					<li>PRODUCTS</li>
					<li>CONTACTS</li>
					</ul>
				</div>
				<div class = "login"> 
				<ul>
					<li onclick = "signupToggle()">SIGN UP</li>
					<li onclick = "loginToggle()">LOGIN</li>
				</ul>
				</div>
			</nav>
		</header>
	</div>
	<div class = "signup-form">
		<div class = "form">
			<div class = "close" onclick = "signupToggle()">&times;</div>
			<div class = "text">
			<h1 style = "font-family: helvetica">Registration Form</h1>
			</div>
			<form action = "insert.php" method = "post" >
			<div class = "row">
			<input type = "text" name = "FirstName" placeholder = "First Name" required>
			<input type = "text" name = "LastName" placeholder = "Last Name" required>
			</div>
			<input type = "text" name = "Email" placeholder = "Email" required>
			<input type = "text" name = "Username" placeholder = "Username" required>
			<input type = "text" name = "Password" placeholder = "Password" required>
			<button type = "submit" name = "sign-up">Sign Up</button>
			</form>
		</div>
	</div>
	<div class = "login-form">
		<div class = "form">
			<div class = "close" onclick = "loginToggle()">&times;</div>
			<div class = "text">
			<h1 style = "font-family: helvetica">Login Form</h1>
			</div>
				<form action = "login.php" method = "post">
					<input type = "text" name = "uname"placeholder = "Username" required>
					<input type = "text" name = "password"placeholder = "Password" required>
					<button type = "submit" name = "login">Login</button>
				</form>
		</div>
	</div>
		<script>
			function signupToggle()
			{
				var container = document.querySelector('.container');
				container.classList.toggle('active');
				var popup = document.querySelector('.signup-form');
				popup.classList.toggle('active');
			}
			function loginToggle()
			{
				var container = document.querySelector('.container');
				container.classList.toggle('active');
				var popup = document.querySelector('.login-form');
				popup.classList.toggle('active');
			}
		</script>
</body>
</html>
