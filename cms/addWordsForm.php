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
                        <h1 class="mt-4">Dodaj słowo</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Proszę wypełnić wszystkie pola</li>
                        </ol>
                        <p>                    
          
               
    <form method="POST" action="functions/addWords.php"> 
    <fieldset>
<!-- Czesc mowy-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Podaj część mowy</label>  
  <div class="col-md-4">
  <input id="czesc_mowy" name="czesc_mowy" type="text" placeholder="czesc_mowy" class="form-control input-md" required="">
  </div>
</div>
<!-- Wersja PL-->
<div class="form-group">
  <label class="col-md-4 control-label" for="wersja_PL">Podaj wersję PL</label>
  <div class="col-md-4">
    <input id="wersja_PL" name="wersja_PL" type="text" placeholder="wersja_PL" class="form-control input-md" required="">
    </div>
</div>
<!-- Wersja ANG-->
<div class="form-group">
  <label class="col-md-4 control-label" for="wersja_ANG">Podaj wersję ANG</label>
  <div class="col-md-4">
    <input id="wersja_ANG" name="wersja_ANG" type="text" placeholder="wersja_ANG" class="form-control input-md" required="">
    </div>
</div>
<!-- Wersja PL-->
<div class="form-group">
  <label class="col-md-4 control-label" for="opis_PL">Podaj opis PL</label>  
  <div class="col-md-4">
  <input id="opis_PL" name="opis_PL" type="text" placeholder="opis_PL" class="form-control input-md" required="">
  </div>
</div>
<!-- Wersja ANG-->
<div class="form-group">
  <label class="col-md-4 control-label" for="opis_ANG">Podaj opis ANG</label>  
  <div class="col-md-4">
  <input id="opis_ANG" name="opis_ANG" type="text" placeholder="opis_ANG" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
    <label for="selectKategoria" class="col-4 col-form-label">Wybór kategorii</label> 
    <div class="offset-1 col-8">
      <select id="kat_id" name="kat_id" class="custom-select">
        <option value="1">Wszystkie</option>     
        <option value="2">Bezpieczeństwo</option>
        <option value="3">Biznes</option>        
        <option value="4">Programowanie aplikacji</option>        
        <option value="5">Strony internetowe</option>        
      </select>
    </div>
  </div> 
</fieldset>
<div class="form-group row">
    <div class="offset-1 col-8">
    <input type="submit" class="btn btn-info" value="Dodaj słówko">
    </div>
</form>

 </p>
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 