<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="/css/kd.css" media="screen">
  <title>Shop Products</title>
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
include 'dbConnection.php';
echo '<h1>Search Results:</h1>';

$db = loadDB();
$type = $_POST['type'];
$message = '<p>Sorry, <strong><em>"' . $type . '"</em></strong> could not be found. Please enter another search term. Try "print" or "stationery".</p>';

//Display all print
if ($type == 'print'){

	$stmt = $db->query("SELECT * FROM products
	WHERE type='print'");
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

		echo '<div class="outline-results"><h2><strong>' . $row['title'].'</strong></h2><br><p>'.$row['description'] . '<br>$' . $row['price'] . '</p></div>';

	} 

} else {

//Display all print
	if ($type == 'stationery'){

	$stmt = $db->query("SELECT * FROM products
	WHERE type='stationery'");
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

		echo '<div class="outline-results"><h2><strong>' . $row['title'].'</strong></h2><br><p>'.$row['description'] . '<br>$' . $row['price'] . '</p></div>';
		
		}
	} else {
	
			echo $message;
	
	}

}

?>
<form action="index.php" method="POST" >
<br/>
<input class="button" type="submit" value="Back">
</form>

</main>
    
    
    <footer>
    		<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/kd-footer.php'; ?>
    </footer>


</body>
</html>