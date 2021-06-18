<?php
session_start();
if(file_exists("../../config/con.fig.php")) require_once("../../config/con.fig.php");	


$query2 = "UPDATE profile SET email='".$_POST['email']."', telefon='".$_POST['telefon']."' WHERE user_id='".$_SESSION['user_id']."'";
if(mysqli_query($link, $query2)){
   
    header("location:../successfulAction.php");
  
} else{
    
    header("location:../errorAction.php");
          
}
?>
