<?php
  if(file_exists("head.php")) include("head.php");
?>
 <link rel="stylesheet" type="text/css" href="css/style.css">  
<header class="bg-info text-white">
    <div class="container text-center">
      <h1>Zakładanie konta</h1>
     
    </div>
  </header>        
   

<body>

<section id="form">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
         <p class="lead">Proszę wypełnić wszystkie pola formularza:</p>
          
               
    <form method="POST" action="functions/signingUp.php"> 
    <fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Podaj login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="login" class="form-control input-md" required="">
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="haslo">Podaj hasło</label>
  <div class="col-md-4">
    <input id="haslo" name="haslo" type="password" placeholder="hasło" class="form-control input-md" required="">
    </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="powtorzhaslo">Powtórz hasło</label>
  <div class="col-md-4">
    <input id="powtorzhaslo" name="powtorzhaslo" type="password" placeholder="hasło" class="form-control input-md" required="">
    </div>
</div>
</fieldset>

<div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Załóż konto</button>
    </div>
</form>

</body>
</section>
<?php
  if(file_exists("footer.php")) include("footer.php");
?>


