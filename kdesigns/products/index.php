<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Admin Add Product | KDesigns Studio</title>
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

<?php 
	echo 'Welcome, ' . $_POST["username"] . '! Please add a product.';
?>

<div class="outline">
<h1>Add Product</h1>
<form action="insert.php" method="post">
Title:<br><input type="text" name="title" required><br><br />
Price:<br><input type="text" name="price" required><br><br />
Type:<br><select name="type" required>
<option value="print">Print</option>
<option value="stationery">Stationery</option>
</select><br><br />
Description:<br><textarea rows="5" cols="40" name="description" required></textarea><br /><br />
<input class="button" type="submit" value="Submit">
</form>
</div>

</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/kd-footer.php'; ?>       
</footer>

</body>
</html>
