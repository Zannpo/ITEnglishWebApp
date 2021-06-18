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
      <h1>IT English Web Application </h1>
      <p class="lead">Pomożemy ci zrozumieć angielski z branży IT!</p>     
      </p>
    </div>

  </header>
   
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Informacje o nas</h2>
          <p class="lead">Powstała strona ma na celu ułatwienie nauki słownictwa angielskiego języka angielskiego z branży IT. 
            Jest tworzona z myślą o każdym kto tylko chce się nauczyć nowych terminów. Mamy nadzieję, że bez względu na wiek czy zainteresowania każdy użytkownik znajdzie tu coś dla siebie. 
          </p>
          <ul>
            <li>Niedługo również powstanie aplikacja mobilna. Zapraszamy do sprawdzania <i>Google Play!</i></li>
          
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Słowo na dziś</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white ">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
            
          </ul>       
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Słowo na dziś</h2>
          <p class="lead">
          <p>
        <?php
        $query="SELECT * FROM words
        ORDER BY RAND()
        LIMIT 1 ";     
        $results = mysqli_query($link,$query);
        while($row=mysqli_fetch_array($results)){

        echo "<b>" .$row[wersja_PL]." </b><br>\n";
        echo "<i>" .$row[wersja_ANG]." </i><br>\n";
        echo $row[opis_PL]." <br>\n";        
        } 
        ?>

          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Kontakt</h2>
          <p class="lead">         
          <?php
          echo "W razie pytań zachęcamy do kontaktu.";
          echo "<br>";
          echo "<b>Nr telefonu:</b> <i>0-600-500-400</i>";
          echo "<br>";
          echo "<b>Adres e-mail:</b> <i>ITEngWApp@gmail.com</i>";         
                    
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



