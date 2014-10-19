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
echo '<h1>Products:</h1>';
$db = loadDB();
$type = $_POST['type'];
//Display all Products
if ($type == 'any')
{
$stmt = $db->query("SELECT * FROM products");
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo '<div class="outline-results"><h2><strong>' . $row['title'].'</strong></h2><br><p>'.$row['description'] . '<br>$' . $row['price'] . '</p></div>';
}
}
//Else display the specific type from products table
else
{
$stmt = $db->prepare("SELECT * FROM products WHERE type=:type");
$stmt->bindValue(':type', $type , PDO::PARAM_STR);
$stmt->execute();
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