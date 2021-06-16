<?php
session_start();
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	

//Logowanie
$query = "SELECT * FROM users WHERE login = '".$_POST['login']."' AND aktywny = 1";
    echo $query;

    $wynik= mysqli_query($link,$query);
    if(mysqli_num_rows($wynik) == 1)
    {
      echo "<p> Taki użytkownik istnieje. </p>";
      $wiersz = mysqli_fetch_assoc($wynik);
      if(password_verify($_POST['haslo'], $wiersz['haslo']))
      {

        $_SESSION['user_id']=$wiersz['user_id'];
        $_SESSION['login']=$wiersz['login'];
        $_SESSION['uprawnienia']=$wiersz['uprawnienia'];
  
        if($wiersz['uprawnienia'] == 0)
        {
          //Przejście do panelu admina
          header("location:../cms/index.php");
        }
        else
        {
          //Przejście do strony zalogowanego użytkownika
          header("location:../loggedSite.php");
        }
    
      }
      else{
      echo "Niepoprawne hasło";
      }
    
    }else{
    //echo "<p> Taki użytkownik nie został znaleziony. </p>";
    header("location:../loginForm.php");
    
    }
    
?>