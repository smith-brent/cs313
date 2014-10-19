<?php
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
<body>
<header>
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
</header>

<main class="standard">
<?php
include 'dbConnection.php';
echo '<h1>Scripture Resources</h1>';
$db = loadDB();
$book = $_POST['book'];
//Display all scriptures
if ($book == 'any')
{
$stmt = $db->query("SELECT * FROM scriptures");
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo '<p><strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "</p><br>";
}
}
//Else display the scriptures from that book
else
{
$stmt = $db->prepare("SELECT * FROM scriptures WHERE book=:book");
$stmt->bindValue(':book', $book , PDO::PARAM_STR);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo '<p><strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "</p><br>";
}
}
?>
<form action="scriptures.php" method="POST" >
<br/>
<input class="button" type="submit" value="Back">
</form>
?>

</main>
    
    
    <footer>
    		<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>


</body>
</html>