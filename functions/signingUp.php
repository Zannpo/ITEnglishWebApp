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
    
    //Hashowanie hasła
    $haslo = password_hash($haslo,PASSWORD_DEFAULT);

$queryToCheck ="SELECT * FROM users WHERE login = '".$_POST['login']."'";   
$result = mysqli_query($link,$queryToCheck);

$number = 0;
//Sprawdzenie ilości wystąpień danego użytkownika. Czy taki login już istnieje
while($row=mysqli_fetch_array($result)){
    
  if($row['login'] == $login)
  {
    $number = $number + 1;
  }
  
}

if($number == 0)
{
  $_SESSION['user_login'] = $login;
  $_SESSION['haslo'] = $haslo;
  header("location:addUser.php");
}
else
{
  echo "Taki użytkownik już istnieje";
}

     
  }
?>