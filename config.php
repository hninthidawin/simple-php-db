<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseusername");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

/* Attempt to connect to MySQL database */
$link = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
