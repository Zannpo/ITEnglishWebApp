<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
$login = $_POST['admin_name'];
$password = htmlspecialchars($_POST['password']);
$password = password_hash($password,PASSWORD_DEFAULT);


$query = "INSERT INTO users (user_id, login,haslo,uprawnienia) VALUES(NULL,'".$login."','".$password."','1')";

if(mysqli_query($link, $query)){
    //Utworzenie profilu użytkownika
    $query2 = "INSERT INTO profile(user_id,email,telefon,data_modyfikacji) VALUES (NULL,'','',CURRENT_TIMESTAMP)";
   if(mysqli_query($link,$query2))
   {
    
    echo "Konto administratora zostało pomyślnie utworzone";
    echo "<br>";
    echo "Skasuj folder instal";
    echo "<br>";
    echo "Zmień prawa dostępu do pliku con.fig.php";
    echo "<br>";
    echo "Teraz możesz przejść do strony";
    echo "<br>";
    echo "<div class=\"btn-group\">\n";
    echo "<a class=\"btn btn-warning\" href=\"../index.php\">Strona główna</a>\n";   
    echo "</div>\n";

    
   }
  
} else{
   
    header("location:installFifthFile.php");
       
}

?>