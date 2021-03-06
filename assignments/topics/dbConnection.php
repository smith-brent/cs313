<?php
// calling loadDB returns a connection to the scriptures_db database.
function loadDB()
{
// Check for OpenShift environment var and connect accordingly
$openShiftCheck = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbName = "php";
if ($openShiftCheck === null || $openShiftCheck == "")
{
// Use Local
// TO DO: Add your own local credintials
require("setLocalDatabaseCredentials.php");
}
else
{
// Use OpenShift
// Values for across domains
$crossDomain = true;
if ($crossDomain)
{
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
}
else
{
// Values for Brent's domain
$dbHost = "http://php-brsmith.rhcloud.com";
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbUser = 'testAdmin';
$dbPassword = 'test123';
}
}
// Attempt to load database
try
{
$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
return $db;
}
catch (PDOException $ex)
{
echo "Error connecting to database.<br>";
echo "Error: " . $ex->getMessage() . "<br>";
die();
}
}

