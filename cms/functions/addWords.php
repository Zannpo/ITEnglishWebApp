<?php
session_start();
if(file_exists("../../config/con.fig.php")) require_once("../../config/con.fig.php");	
?>
<?php 

$czesc_mowy = htmlspecialchars($_POST['czesc_mowy']);
$wersja_PL = htmlspecialchars($_POST['wersja_PL']);
$wersja_ANG = htmlspecialchars($_POST['wersja_ANG']);
$opis_PL = htmlspecialchars($_POST['opis_PL']);
$opis_ANG = htmlspecialchars($_POST['opis_ANG']);
$kat_id = htmlspecialchars($_POST['kat_id']);




    $query = "INSERT INTO words (word_id,czesc_mowy,wersja_PL,wersja_ANG,opis_PL,opis_ANG,kat_id) VALUES(NULL,'".$_POST['czesc_mowy']."','".$_POST['wersja_PL']."','".$_POST['wersja_ANG']."','".$opis_PL."','".$opis_ANG."','".$kat_id."')";

    if(mysqli_query($link, $query)){   
        header("location:../successfulAction.php");
         
    } else{
        header("location:../errorAction.php");     
   
    }



?>