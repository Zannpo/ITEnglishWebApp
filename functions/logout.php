<?php
   session_start();
   $_SESSION['user_id']='';
   $_SESSION['login']='';  
   session_destroy();
   header("location:../index.php"); 
?>