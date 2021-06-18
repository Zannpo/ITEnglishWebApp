<?php
        session_start();  
        if(file_exists("adminHead.php")) include("adminHead.php");	
        if(file_exists("adminNavigation.php")) include("adminNavigation.php");	
        if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
        $login = $_SESSION['login'];     
        $nazwa = $_POST['wybrana_nazwa'];
        $opis = $_POST['wybrany_opis'];
?>
  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Zaktualizuj kategorię</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Proszę wypełnić wszystkie pola</li>
                        </ol>
                        <p>
<section id="form">              
<form method="POST" action="functions/editCategory.php"> 
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nazwa">Nazwa kategorii</label>  
  <div class="col-md-4">
  <input id="nazwa" name="nazwa" type="text" placeholder="nazwa" class="form-control input-md" value="<?php echo $nazwa;?>" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="opis">Opis kategorii</label>
  <div class="col-md-4">
    <input id="opis" name="opis" type="opis" placeholder="opis" class="form-control input-md" value="<?php echo $opis;?>" required="">
    </div>
</div>
</fieldset>

<div class="form-group row">
<div class="col-8">
      <button name="submit" type="submit" class="btn btn-primary">Zaktualizuj kategorię</button>
    </div>
</form>

 </p>
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 