<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen">
  <title>Scripture Resources</title>
  

</head>
<body class="front-page">
<header>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
</header>

<main class="standard">

<h1>Scripture Search</h1>
<form action="results.php" method="POST" >
Book: <select name="book">
<option value="any">Any</option>
<option value="John">John</option>
<option value="Doctrine and Covenants">Doctrine and Covenants</option>
<option value="Mosiah">Mosiah</option>
</select>
<br/><br/>
<input class="button" type="submit" value="Submit">
</form>


	
</main>
    
    
    <footer>
    		<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>


</body>
</html>
