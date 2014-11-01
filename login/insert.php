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
<?php
include 'dbConnection.php';
echo '<h1>Product Added</h1>';
$db = loadDB();
$username = $_POST['username'];
$password = $_POST['password'];


if ($_POST)
{
$query = 'INSERT INTO user2 (username, password)
VALUES (:username, :password)';
$statement = $db->prepare($query);
$statement->bindParam(':username', $username);
$statement->bindParam(':password', $password);
$statement->execute();
echo "<p>Success! You are now registered.</p>";
}
// catch (PDOException $ex)
// {
// echo 'error';
// }
?>
<form action="display.php" method="POST" >
<br/>
<input  class="button" type="submit" value="View Info">
</form>
</main>


	
</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>