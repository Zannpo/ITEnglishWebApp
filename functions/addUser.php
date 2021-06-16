<?php 
session_start();
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
//Utworzenie konta użytkownika
$query = "INSERT INTO users (user_id, login,haslo,uprawnienia,aktywny) VALUES(NULL,'".$_SESSION['user_login']."','".$_SESSION['haslo']."',1,1)";

if(mysqli_query($link, $query)){
    echo "Konto zostało utworzone pomyślnie.";
} else{
    echo "BŁĄD: Nie można utworzyć konta $query. " . mysqli_error($link);
}
?>