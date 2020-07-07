<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$client = new MongoDB\Client(
    'mongodb+srv://<username>:<password>@atlas-gqor3.mongodb.net/<dbname>?retryWrites=true&w=majority');

$db = $client->test;
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . ());
}
?>