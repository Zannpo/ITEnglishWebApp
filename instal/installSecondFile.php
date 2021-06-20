<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();
//Pobranie danych od użytkownika

echo"<b>Podaj dane umożliwiające połączenie z bazą danych</b>";
?>

<form method="POST" action="installThirdFile.php">
      <input type="text" id="host_name" name="host_name" placeholder="Wpisz nazwę hosta" required="">
      <br>
      <br>
      <input type="text" id="db_name" name="db_name" placeholder="Wpisz nazwę bazy danych" required="">   
      <br>
      <br> 
      <input type="text" id="user_name" name="user_name" placeholder="Wpisz nazwę użytkownika" required="">
      <br>
      <br>
      <input type="password" id="password" name="password" placeholder="Wpisz hasło użytkownika" required="">
      <br>
      <br>     
      <input type="text" id="prefix" name="prefix" placeholder="Wpisz prefix tabeli">   
      <br>
      <br> 
      <input type="submit" value="Zaakceptuj dane">     
</form>
   