<?php
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'music';
   $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>