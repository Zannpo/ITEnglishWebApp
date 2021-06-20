<?php
$host='localhost';
$user='2k21_zanpodol';
$password='343452';
$dbname='2k21_zanpodol';
//$prefix='';
$link = new mysqli($host, $user, $password, $dbname);
if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
?>
