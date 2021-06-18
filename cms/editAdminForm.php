<?php
        session_start();  
        if(file_exists("adminHead.php")) include("adminHead.php");	
        if(file_exists("adminNavigation.php")) include("adminNavigation.php");	
        if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
        $login = $_SESSION['login'];
?>
  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Zaktualizuj profil</h1>
                       
                        <p>                    

                        <?php
 //Pobranie danych z profilu wybranego użytkownika
 $query="SELECT * FROM profile WHERE user_id='".$_SESSION['user_id']."'";                          
 $wynik = mysqli_query($link,$query);       
 
 while($wiersz=mysqli_fetch_array($wynik)){
    
  $email = $wiersz['email'];
  $telefon = $wiersz['telefon'];
  }
 

 
if(!mysqli_query($link, $query)){
echo "BŁĄD: Nie można wyświetlić profilu";
}
 ?>
 </p>
  <!-- Edycja profilu -->
  <section id="form">

<p class="lead">Proszę wypełnić wszystkie pola formularza:</p>
          
               
    <form method="POST" action="functions/editAdmin.php"> 
    <fieldset>
<!-- Login-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Podaj login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="login" class="form-control input-md" readonly value="<?php echo $_SESSION['login'];?>">
  </div>
</div>
<!-- Hasło-->
<div class="form-group">
  <label class="col-md-4 control-label" for="haslo">Podaj hasło</label>
  <div class="col-md-4">
    <input id="haslo" name="haslo" type="password" placeholder="hasło" class="form-control input-md" required="">
    </div>
</div>
<!-- Hasło-->
<div class="form-group">
  <label class="col-md-4 control-label" for="powtorzhaslo">Powtórz hasło</label>
  <div class="col-md-4">
    <input id="powtorzhaslo" name="powtorzhaslo" type="password" placeholder="hasło" class="form-control input-md" required="">
    </div>
</div>
<!-- E-mail-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Podaj adres email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="haslo" class="form-control input-md" value="<?php echo $email;?>" required="">
  </div>
</div>
<!-- Telefon-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Wprowadź numer telefonu</label>  
  <div class="col-md-4">
  <input id="telefon" name="telefon" type="tel" placeholder="0-123-456-789" pattern="/^[0-9]{10}+$/" class="form-control input-md" value="<?php echo $telefon;?>" required="">
  </div>
</div>
</fieldset>
<div class="form-group row">
    <div class="offset-1 col-8">
    <input type="submit" class="btn btn-info" value="Aktualizuj profil">
    </div>
</form>

 </p>
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 