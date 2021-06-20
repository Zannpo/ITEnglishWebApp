<?php
$host = "localhost";
$user = "2k21_zanpodol";
$password = "343452";
$dbname = "2k21_zanpodol";
//$prefix = "db";

// Stworzenie połączenia z bazą
$link = new mysqli($host, $user, $password, $dbname);

// Sprawdzenie połączenia
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

?>