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
          <h2>Informacje dla użytkownika</h2>
          <p class="lead">
          Jeśli chcesz możesz:</p>
          <ul>
            <li>Wyświetlić listę słówek według interesujących cię kategorii</li>
            <li>Wyświetlić listę kategorii wraz z ich opisem</li>
            <li>Edytować swój profil</li> 
            <form method="POST" action="#!">
            <input type="text" id="slowo" class="fadeIn second" name="slowo" placeholder="slowo" required>
            <br>
            <input type="submit" class="fadeIn fourth" value="Wyszukaj słowo">     
            </form>
            <?php
            echo "<br>";
            if( $_POST['slowo'] <> NULL )
            {
              $query="SELECT * FROM words WHERE wersja_PL='".$_POST['slowo']."' OR wersja_ANG='".$_POST['slowo']."'";  
              $result= mysqli_query($link,$query); 

              if(mysqli_num_rows($result) == 0)
              {
                echo "Nie ma takiego słowa w bazie";
              }
              else{
              echo "<table border='2'>
              <tr>                          
              
              <th>Wersja PL</th>
              <th>Wersja ANG</th>
              <th>Opis PL</th> 
              <th>Opis ANG</th>                           

              </tr>";
              while($row=mysqli_fetch_array($result))
              
                {
              
                echo "<tr>";
              
                echo "<td>" . $row['wersja_PL'] . "</td>";
                                          
                echo "<td>" . $row['wersja_ANG'] . "</td>";  
                
                echo "<td>" . $row['opis_PL'] . "</td>";
                echo "<td>" . $row['opis_ANG'] . "</td>";
                                                                      
                echo "</tr>";
              
                }       
              echo "</table>";  
              }  
            }
            ?>
          </ul>       
        </div>
      </div>
    </div>
  </section>


</body>
<?php 
  if(file_exists("footer.php")) include("footer.php");
 ?>



