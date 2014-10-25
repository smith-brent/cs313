<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Assignments</title>
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

<h1>Add Scripture</h1>
<form action="insert.php" method="post">
Book: <input type="text" name="book">
Chapter: <input type="number" name="chapter">
Verse: <input type="number" name="verse">
Content: <input type="text" name="content">
<br/><br />
Topics:<br><br />

<input class="button" type="submit">
</form>

</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>
