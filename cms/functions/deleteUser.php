<?php
session_start();  
       
if(file_exists("../../config/con.fig.php")) require_once("../../config/con.fig.php");	

if($_POST['wybrane_id'] == $_SESSION['user_id'])
{
    header("location:../errorAction.php");    
}
else
{
$query = "DELETE FROM users WHERE user_id='".$_POST['wybrane_id']."'";
}

if(mysqli_query($link, $query)){   

    $query2 = "DELETE FROM profile WHERE user_id='".$_POST['wybrane_id']."'";

    if(mysqli_query($link,$query2))
   {
    header("location:../successfulAction.php");
   }
   else
   {
    header("location:../errorAction.php");   
   }
    

    
     
} else{
    header("location:../errorAction.php");     

}


?>
