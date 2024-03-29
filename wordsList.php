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
 

  <section id="words">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto">
          <section id="form"> 
          <h3>Dostępne kategorie</h3>
          <p class="lead">Proszę wybrać kategorię:</p>
          
  <form action="#!" method="POST">
  
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
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Wybierz kategorię</button>
    </div>
  </div>
          <h2>Lista słówek</h2>
          <p class="lead">
            
     <?php                            
      //Wyświetlenie wszystkich słówek w tabeli
      if( $_POST['kat_id'] == NULL || $_POST['kat_id'] == 1 )
      {
          $query="SELECT * FROM words";       
      }
      else{
          //Wyświetl słówka według kategorii
          $query="SELECT * FROM words WHERE kat_id='".$_POST['kat_id']."'";      
      }
                                 
          $wynik = mysqli_query($link,$query);  
                    
         

          echo "<table class=\"table\">\n";
          echo "<thead><tr>
         
          <th>Id</th>

          <th>Czesc Mowy</th>

          <th>Wersja PL</th>            
          
          <th>Wersja ANG</th> 
          
          <th>Opis PL</th>      

          <th>Opis ANG</th>     
          
          <th>Kategoria</th>      

          </thead>\n";
          while($wiersz=mysqli_fetch_array($wynik)){                                

          echo "\t<tr>\n";
          echo "<td>" . $wiersz['word_id'] . "</td>";    
          
          echo "<td>" . $wiersz['czesc_mowy'] . "</td>"; 
          echo "<td>" . $wiersz['wersja_PL'] . "</td>"; 
          echo "<td>" . $wiersz['wersja_ANG'] . "</td>"; 
          echo "<td>" . $wiersz['opis_PL'] . "</td>"; 
          echo "<td>" . $wiersz['opis_ANG'] . "</td>"; 
          echo "<td>" . $wiersz['kat_id'] . "</td>"; 
                                                                 
         
          echo "\t</tr>\n";
          }
          echo "</table>\n";
          
          
        if(!mysqli_query($link, $query)){
         echo "BŁĄD: Nie można wyświetlić listy słówek";
        }

      
        
     ?>    
     </p>   
        </div>
      </div>
    </div>
  </section>

 
</body>
<?php 
  if(file_exists("footer.php")) include("footer.php");
 ?>



