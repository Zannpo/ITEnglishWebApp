<?php
  session_start();  	
  if(file_exists("config/con.fig.php")) require_once("config/con.fig.php");	
  if(file_exists("head.php")) include("head.php");	

?>
 <link rel="stylesheet" type="text/css" href="css/style.css">  
<body>

 <?php
   if(file_exists("userNavigation.php")) include("userNavigation.php");	
   if(file_exists("userHeader.php")) include("userHeader.php");	
  
?>
 
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          <ul>
            <li>Clickable nav links that smooth scroll to page sections</li>
            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            
            
          </ul>       
        </div>
      </div>
    </div>
  </section>


</body>
<?php 
  if(file_exists("footer.php")) include("footer.php");
 ?>



