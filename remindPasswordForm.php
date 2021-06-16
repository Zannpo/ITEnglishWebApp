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

    <!-- Logowanie -->
    <form method="POST" action="functions/remindPasswordForm.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
      <input type="email" id="email" class="fadeIn third" name="email" placeholder="email" required>
      <input type="submit" class="fadeIn fourth" value="Przypomnij hasło">     
    </form>

    <!-- Przypomnienie hasła -->
    <div id="formFooter">    
      <a class="underlineHover" href="index.php">Powrót do strony głównej</a>         
    </div>
    

  </div>
</div>