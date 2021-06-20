<?php
session_start();  
       
if(file_exists("../../config/con.fig.php")) require_once("../../config/con.fig.php");	

$query = "DELETE FROM words WHERE word_id='".$_POST['wybrane_id']."'";


if(mysqli_query($link, $query)){   

    
    header("location:../successfulAction.php");
 
     
} else{
    header("location:../errorAction.php");     

}


?>
