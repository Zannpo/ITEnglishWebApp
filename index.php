<?php
  session_start();
  //if(file_exists("config/con.fig.php")) include("config/con.fig.php");	
  if(file_exists("config/con.fig.php")) require_once("config/con.fig.php");	
  if(file_exists("head.php")) include("head.php");	

?>

<body id="page-top">

<?php
  if(file_exists("scrollingNavigation.php")) include("scrollingNavigation.php");	
 ?>

  <header class="bg-info text-white">
    <div class="container text-center">
      <h1>Welcome to Scrolling Nav</h1>
      <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
    </div>
  </header>
  <?php
  if ($_SESSION['user_id']<>"")
  {    
    echo "<p>Strona po logowaniu</p>";
    
    echo "<h2>Witaj ".$_SESSION['login']."!!<h2>";
  }else
  {
    echo "<p>Strona przed logowaniem</p>";
    echo "<p><a href=\"login.php\" class=\"btn btn-info\">Zaloguj się</a></p>";
  } 
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

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">
          <?php
            /*$query="SELECT * FROM users";
            #echo $query;
            $wynik = mysqli_query($link,$query);
            while($wiersz=mysqli_fetch_array($wynik)){
    
            echo $wiersz[0]." ".$wiersz[haslo]." ".$wiersz[login]."<br>\n";
            }
              */
          
          ?>
          </p>
        </div>
      </div>
    </div>
  </section>

 
 
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  <?php 
  if(file_exists("footer.php")) include("footer.php");
 ?>
</body>



