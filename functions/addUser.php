<link href="../css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Ikonka -->
    <div class="fadeIn first">
    <img src="../images/united-kingdom.png" id="icon" alt="User Icon" />
    </div>

 <?php 

//Utworzenie konta użytkownika
$query = "INSERT INTO users (user_id, login,haslo,uprawnienia) VALUES(NULL,'".$_SESSION['user_login']."','".$_SESSION['haslo']."',1)";

if(mysqli_query($link, $query)){
    //Utworzenie profilu użytkownika
    $query2 = "INSERT INTO profile(user_id,email,telefon,data_modyfikacji) VALUES (NULL,'".$_SESSION['email']."','".$_SESSION['telefon']."',CURRENT_TIMESTAMP)";
   if(mysqli_query($link,$query2))
   {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Konto zostało utworzone pomyślnie.";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p><a href=\"../index.php\" class=\"btn btn-info\">Powrót do strony głównej</a></p>";
   }
  
} else{
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "BŁĄD: Nie można utworzyć konta $query. " . mysqli_error($link);  
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p><a href=\"../index.php\" class=\"btn btn-info\">Powrót do strony głównej</a></p>";        
}
?>


  </div>
</div>