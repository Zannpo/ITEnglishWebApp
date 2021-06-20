<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
session_start();
//Pobranie danych 

echo"<b>Podaj dane administratora</b>";
?>


<form method="POST" action="installFinalFile.php">
      <input type="text" id="admin_name" name="admin_name" placeholder="Wpisz login admina" required="">
      <br>
      <br>      
      <input type="password" id="password" name="password" placeholder="Wpisz hasło admina" required="">
      <br>
      <br>       
<input type="submit" value="Zaakceptuj dane">   
</form>
  
