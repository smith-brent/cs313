<?php
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

<?php
include 'dbConnection.php';
echo '<h1>Scripture Inserted</h1>';
$db = loadDB();
$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];
$topic_id = $_POST['topic_id'];
if ($_POST)
{
$query = 'INSERT INTO scriptures (book, chapter, verse, content)
VALUES (:book, :chapter, :verse, :content)';
$statement = $db->prepare($query);
$statement->bindParam(':book', $book);
$statement->bindParam(':chapter', $chapter);
$statement->bindParam(':verse', $verse);
$statement->bindParam(':content', $content);
$statement->execute();
echo "<p>Success! Your Scripture has been added to the database.</p>";
}
// catch (PDOException $ex)
// {
// echo 'error';
// }
?>
<form action="display.php" method="POST" >
<br/>
<input  class="button" type="submit" value="View All Scriptures">
</form>

</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>