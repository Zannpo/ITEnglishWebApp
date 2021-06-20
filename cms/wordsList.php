<?php
        session_start();  
        if(file_exists("adminHead.php")) include("adminHead.php");	
        if(file_exists("adminNavigation.php")) include("adminNavigation.php");	
        if(file_exists("../config/con.fig.php")) require_once("../config/con.fig.php");	
        $login = $_SESSION['login'];
      ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista słówek</h1>
                        
                        <p>
                        <section id="form"> 
          <h4>Dostępne kategorie</h4>
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
                                                   
                            $result = mysqli_query($link,$query);                                      
                           

                            echo "<table class=\"table\">\n";
                            echo "<thead><tr>
                           
                            <th>Id</th>

                            <th>Czesc Mowy</th>

                            <th>Wersja PL</th>            
                            
                            <th>Wersja ANG</th> 
                            
                            <th>Opis PL</th>      

                            <th>Opis ANG</th>     
                            
                            <th>Kategoria</th>   
                            
                            <th>Usuń </th>

                            </thead>\n";
                            while($row=mysqli_fetch_array($result)){                                

                            echo "\t<tr>\n";
                            echo "<td>" . $row['word_id'] . "</td>";    
                            
                            echo "<td>" . $row['czesc_mowy'] . "</td>"; 
                            echo "<td>" . $row['wersja_PL'] . "</td>"; 
                            echo "<td>" . $row['wersja_ANG'] . "</td>"; 
                            echo "<td>" . $row['opis_PL'] . "</td>"; 
                            echo "<td>" . $row['opis_ANG'] . "</td>"; 
                            echo "<td>" . $row['kat_id'] . "</td>"; 
                            echo '<td><form action="seeProfiles.php" method="post">
                            <input type="hidden" name="wybrane_id" value="'.$row['word_id'].'">                            
                            <input type="submit" value="Usuń" name="usun">
                            </form></td>';
                                                                                   
                           
                            echo "\t</tr>\n";
                            }
                            echo "</table>\n";
                            
                            
                          if(!mysqli_query($link, $query)){
                           echo "BŁĄD: Nie można wyświetlić listy słówek";
                          }

                        
                          ?>

                        </p>        
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 
