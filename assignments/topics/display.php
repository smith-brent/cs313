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

<?php
include 'dbConnection.php';
echo '<br><br><br><br><h2>Scripture Master List</h2>';
$db = loadDB();
$book = $_POST['book'];
$chapter = $_POST['chapter'];
//Display all scriptures
if ($book == '')
{
$stmt = $db->query("SELECT * FROM scriptures");
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo '<strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "<br>";
}
}

?>
<form action="index.php" method="POST" >
<br/>
<input class="button" type="submit" value="Back">
</form> 

</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>