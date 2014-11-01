<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Register | Login</title>
  	<meta name="description" content=""/>
	<meta name="keywords" content="" />
    <link rel="shortcut icon" href="/images/favicon.ico" >
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen">
</head>

<body>

<header>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
</header>

<main class="standard">

<div class="login-outline">
<h1>Sign In</h1>
<form action="display.php" method="POST">
  Username<br><input type="text" name="username" required><br><br>
  Password<br><input type="password" name="password" required><br />
  <input class="button" type="submit" value="Login">
</form>
<p>Not a member yet? <a href="/login/index.php">Join</a></p>
</div>


	
</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>