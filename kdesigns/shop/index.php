<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="/css/kd.css" media="screen">
  <title>Shop | KDesigns Studio | Life . Style . Design</title>
  

</head>
<body class="front-page">
<header>
		<div class="homebutton">
		<p><a href="/">Home</a><p>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/kd-header.php'; ?>
	<div class="homepic">
		<img src="/kdesigns/images/header-01.png" alt="KDesigns Studio Logo">
	</div>
</header>

<main class="standard">

<div class="outline">
<h1>Search Products</h1>
<form action="results2.php" method="POST">
  Search: <input type="search" name="type"><br>
  <input class="button" type="submit" value="Search">
</form>
</div>

<div class="outline">
<h1>Shop Products</h1>
<form action="results.php" method="POST" >
Products: <select name="type">
<option value="any">Any</option>
<option value="print">Prints</option>
<option value="stationery">Stationery</option>
</select>
<br/>
<input class="button" type="submit" value="Submit">
</form>
</div>


	
</main>
    
    
    <footer>
    		<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/kd-footer.php'; ?>
    </footer>


</body>
</html>
