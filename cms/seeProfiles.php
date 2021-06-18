<?php
session_start();  
if(file_exists("adminHead.php")) include("adminHead.php");	
if(file_exists("adminNavigation.php")) include("adminNavigation.php");	
if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
$login = $_SESSION['login'];


//Pobranie danych z profilu wybranego użytkownika
$query="SELECT * FROM profile WHERE user_id='".$_POST['wybrane_id']."'";                          
$wynik = mysqli_query($link,$query);       

while($wiersz=mysqli_fetch_array($wynik)){
   
 $email = $wiersz['email'];
 $telefon = $wiersz['telefon'];
 }




if(!mysqli_query($link, $query)){
echo "BŁĄD: Nie można wyświetlić profilu";
}
?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Profil użytkownika</h1>
                        
                        <p>  
            

          
               
                
<form> 
    <fieldset>
<!-- Login-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="login" class="form-control input-md" readonly value="<?php echo $_POST['wybrany_login'];?>">
  </div>
</div>
<!-- E-mail-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Adres email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="haslo" class="form-control input-md" readonly value="<?php echo $email;?>">
  </div>
</div>
<!-- Telefon-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Numer telefonu</label>  
  <div class="col-md-4">
  <input id="telefon" name="telefon" type="tel" placeholder="0-123-456-789" pattern="/^[0-9]{10}+$/" class="form-control input-md" readonly value="<?php echo $telefon;?>">
  </div>
</div>
</fieldset>

</form>

 </p>

<?php
if(file_exists("../adminFooter.php")) include("../adminFooter.php");	
?>  