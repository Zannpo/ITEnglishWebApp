<?php
session_start();
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	


$query = "UPDATE users SET haslo='".$_POST['haslo']."' WHERE user_id='".$_SESSION['user_id']."'";
$query2 = "UPDATE profile SET email='".$_POST['email']."', telefon='".$_POST['telefon']."' WHERE user_id='".$_SESSION['user_id']."'";
if(mysqli_query($link, $query2)){
     
    echo "Profil zaktualizowany pomyślnie";
  
} else{
    
    echo "BŁĄD: Nie można zaktualizować profilu $query. " . mysqli_error($link);  
          
}
?>

