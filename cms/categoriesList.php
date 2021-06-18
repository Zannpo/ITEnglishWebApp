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
                        <h1 class="mt-4">Lista kategorii</h1>                        
                        <p>
                        <?php
                        //Wyświetlenie wszystkich użytkowników w tabeli
                            $query="SELECT * FROM categories";                          
                            $wynik = mysqli_query($link,$query);                                       
                          

                            echo "<table class=\"table\">\n";
                            echo "<thead><tr>
                           
                            <th>Id</th>

                            <th>Nazwa kategorii</th>

                            <th>Opis</th>  
                            
                            <th>Edytuj kategorię</th>

                            <th>Usuń kategorię</th>

                            </thead>\n";
                            while($wiersz=mysqli_fetch_array($wynik)){                                

                            echo "\t<tr>\n";
                            echo "<td>" . $wiersz['category_id']."</td>";
                                                        
                            echo "<td>" . $wiersz['nazwa']. "</td>";                                                     
                                                                                  
                            echo "<td>" . $wiersz['opis'] . "</td>";

                            echo '<td><form action="editCategoryForm.php" method="post">
                            <input type="hidden" name="wybrane_id" value="'.$wiersz['category_id'].'"> 
                            <input type="hidden" name="wybrana_nazwa" value="'.$wiersz['nazwa'].'"> 
                            <input type="hidden" name="wybrany_opis" value="'.$wiersz['opis'].'"> 
                            <input type="submit" value="Edytuj" name="edit">
                            </form></td>';

                            echo '<td><form action="deleteCategory.php" method="post">
                            <input type="hidden" name="wybrane_id" value="'.$wiersz['category_id'].'"> 
                            <input type="submit" value="Usuń" name="usun">
                            </form></td>';

                            echo "\t</tr>\n";
                            }
                            echo "</table>\n";
                    
                            
                          if(!mysqli_query($link, $query)){
                           echo "BŁĄD: Nie można wyświetlić listy kategorii";
                          }

                        
                          ?>

                        </p>        
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 
