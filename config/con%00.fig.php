<?php
$host = "localhost";
$user = "2k21_zanpodol";
$password = "343452";
$dbname = "2k21_zanpodol";
//$prefix = "db";

// Create connection
$link = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
// echo "Connected successfully";


//ini_set('display_errors', true) //- in order to display errors on the page
?>