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
echo '<h1>Product Added</h1>';
$db = loadDB();
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$type = $_POST['type'];

if ($_POST)
{
$query = 'INSERT INTO products (title, description, price, type)
VALUES (:title, :description, :price, :type)';
$statement = $db->prepare($query);
$statement->bindParam(':title', $title);
$statement->bindParam(':description', $description);
$statement->bindParam(':price', $price);
$statement->bindParam(':type', $type);
$statement->execute();
echo "<p>Success! Your product has been added to the database.</p>";
}
// catch (PDOException $ex)
// {
// echo 'error';
// }
?>
<form action="display.php" method="POST" >
<br/>
<input  class="button" type="submit" value="View Products">
</form>
</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>