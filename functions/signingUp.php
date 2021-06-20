<?php
session_start();
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	

//Sprawdzenie czy hasła są takie same
if($_POST['haslo'] <> $_POST['powtorzhaslo'])
  {
    echo "<p class='alert alert-danger'> Podane hasła są różne <a href='../signUpForm.php'>Powrót</a></p>\n";
    header("location:../signUpForm.php");
  }else{

    $login = htmlspecialchars($_POST['login']);
    $haslo = htmlspecialchars($_POST['haslo']);
    $email = htmlspecialchars($_POST['email']);
    $telefon = htmlspecialchars($_POST['telefon']);
    
    //Hashowanie hasła
    $haslo = password_hash($haslo,PASSWORD_DEFAULT);


//Sprawdzenie ilości wystąpień danego użytkownika. Czy taki login już istnieje
$queryToCheck ="SELECT * FROM users WHERE login = '".$_POST['login']."'";   
$result = mysqli_query($link,$queryToCheck);

$number = 0;

while($row=mysqli_fetch_array($result)){
    
  if($row['login'] == $login)
  {
    $number = $number + 1;
  }

}
  
}

if($number == 0)
{
  $_SESSION['user_login'] = $login;
  $_SESSION['haslo'] = $haslo;
  $_SESSION['email'] = $email;
  $_SESSION['telefon'] = $telefon;
  header("location:addUser.php");
  
}
else
{
  header("location:errorMatchFound.php");
}

     
  
?>