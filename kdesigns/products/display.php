<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Display Product | KDesigns Studio</title>
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
include 'dbConnection.php';
echo '<br><br><h2>Product List</h2>';
$db = loadDB();
$title = $_POST['title'];
$type = $_POST['type'];
//Display all scriptures
if ($type == '')
{
$stmt = $db->query("SELECT * FROM products");
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo '<div class="outline-results"><h2><strong>' . $row['title'].'</strong></h2><br><p>'.$row['description'] . '<br>$' . $row['price'] . '</p></div>';
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