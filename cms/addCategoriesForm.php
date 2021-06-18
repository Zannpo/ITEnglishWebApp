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
                        <h1 class="mt-4">Utwórz kategorię</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Proszę wypełnić wszystkie pola</li>
                        </ol>
                        <p>
<section id="form">              
<form method="POST" action="functions/addCategories.php"> 
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nazwa">Podaj nazwę kategorii</label>  
  <div class="col-md-4">
  <input id="nazwa" name="nazwa" type="text" placeholder="nazwa" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="opis">Podaj opis kategorii</label>
  <div class="col-md-4">
    <input id="opis" name="opis" type="opis" placeholder="opis" class="form-control input-md" required="">
    </div>
</div>
</fieldset>

<div class="form-group row">
<div class="col-8">
      <button name="submit" type="submit" class="btn btn-primary">Zatwierdź kategorię</button>
    </div>
</form>

 </p>
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 