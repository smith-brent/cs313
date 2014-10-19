<?php

include ("../../includes/dbConnector.php");
echo "model dbconnect connected";

function connect(){
	try {
		$db = new PDO("mysql:host=$dbHost:$dbPort;dbname='php'", $dbUser, $dbPassword);
	} catch (PDOException $ex) {
		echo "Error!: " . $ex->getMessage();
		die();
	} return $db;
}

echo "<p>host:$dbHost:$dbPort dbName:php<br />\n</p>";


function getScriptures() {
	$db =  connect();
	echo "get scripture connect";
    $query = "SELECT * FROM scriptures";
    echo "query select";
    $scriptures = $db->query($query);
    echo "scriptures query";
    $list = $scriptures->fetchAll();
    echo "list scriptures";
 	
    return $list; 
}