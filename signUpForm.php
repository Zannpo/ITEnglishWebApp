<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Ikonka -->
    <div class="fadeIn first">
    <img src="images/united-kingdom.png" id="icon" alt="User Icon" />
    </div>

<!-- Rejestracja -->
    <section id="form">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
         <p class="lead">Proszę wypełnić wszystkie pola formularza:</p>
          
               
    <form method="POST" action="functions/signingUp.php"> 
    <fieldset>
<!-- Login-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Podaj login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="login" class="form-control input-md" required="">
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
  <input id="email" name="email" type="email" placeholder="email" class="form-control input-md" required="">
  </div>
</div>
<!-- Telefon-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Wprowadź numer telefonu</label>  
  <div class="col-md-4">
  <input id="telefon" name="telefon" type="tel" placeholder="0-123-456-789" pattern="/^[0-9]{10}+$/" class="form-control input-md" required="">
  </div>
</div>
</fieldset>

<div class="form-group row">
    <div class="offset-4 col-8">
    <input type="submit" class="fadeIn fifth" value="Utwórz konto">
    </div>
</form>

    <div id="formFooter">      
      <a class="underlineHover" href="index.php">Powrót do strony głównej</a>         
    </div>
    

  </div>
</div>