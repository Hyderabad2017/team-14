
<html>
<head>
	<meta charset="UTF-8">
	<title>Learning Curve</title>
	<link rel="stylesheet" href="css/loginpage.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php">Learning Curve</a>
			</div>
			<div id="navigation">
				<ul>
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="login-card" >
    	<h1>Log-in</h1><br>
  		<form name="myForm" action="logincheck.php" method="post">
          
    		<input type="text" name="username" id="username" value="username" placeholder="UserID">
    		<input type="password" name="password" value="password" placeholder="Password">
    	
    		<input type="submit" name="login" class="login login-submit" value="Sign in">
  		</form>

	</div>

</body>
</html>