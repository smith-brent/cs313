<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Login | KDesigns Studio | Life . Style . Design</title>
  	<meta name="description" content=""/>
	<meta name="keywords" content="" />
    <link rel="shortcut icon" href="/images/favicon.ico" >
    <link rel="stylesheet" type="text/css" href="/css/kd.css" media="screen">
</head>

<body>

<header>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/kd-header.php'; ?>
	<div class="homepic">
		<img src="/kdesigns/images/header-01.png" alt="KDesigns Studio Logo">
	</div>
</header>

<main class="standard">

<div class="login-outline">
<h1>Login</h1>
<form action="products/" method="POST">
  Username<br><input type="text" name="username" required><br><br>
  Password<br><input type="password" name="password" required><br />
  <input class="button" type="submit" value="Login">
</form>
<p>&#42;Input a fictitious username and password. Login is still in development stage.</p>
</div>


	
</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/kd-footer.php'; ?>        
</footer>

</body>
</html>