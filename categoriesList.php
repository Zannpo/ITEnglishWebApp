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
 
 
  <section id="categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Lista kategorii</h2>
          <p class="lead">
            Poniżej znajduje się cała lista dostępnych kategorii występującego słownictwa.

            <?php
            $query="SELECT * FROM categories";             
                $wynik = mysqli_query($link,$query);
                echo "<table border='2'>
                            <tr>                          

                            <th>Nazwa</th>

                            <th>Opis</th>                            

                            </tr>";
                            while($wiersz=mysqli_fetch_array($wynik))
                            
                              {
                            
                              echo "<tr>";
                            
                              echo "<td>" . $wiersz['nazwa'] . "</td>";
                                                        
                              echo "<td>" . $wiersz['opis'] . "</td>";                                                      
                                                                                    
                              echo "</tr>";
                            
                              }       
                            echo "</table>"; 
                        
     ?>       
         </p>
    
        </div>
      </div>
    </div>
  </section>

  <?php 
  if(file_exists("footer.php")) include("footer.php");
 ?>
</body>



