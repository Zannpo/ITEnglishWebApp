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
                        <h1 class="mt-4">Lista użytkowników</h1>
                        
                        <p>
                        <?php
                        //Wyświetlenie wszystkich użytkowników w tabeli
                            $query="SELECT * FROM users";                          
                            $wynik = mysqli_query($link,$query);  
                                      
                                                  
                    
                            /*
                            echo "<table border='2'>
                            <tr>

                            <th>Id</th>

                            <th>Login</th>

                            <th>Hasło</th>

                            <th>Uprawnienia</th>

                            <th>Aktywność</th>

                            </tr>";
                            while($wiersz=mysqli_fetch_array($wynik))
                            
                              {
                            
                              echo "<tr>";
                            
                              echo "<td>" . $wiersz['user_id'] . "</td>";
                                                        
                              echo "<td>" . $wiersz['login'] . "</td>";
                                                        
                              echo "<td>" . $wiersz['haslo'] . "</td>";
                                                        
                              echo "<td>" . $wiersz['uprawnienia'] . "</td>";

                              echo "<td>" . $wiersz['aktywny'] . "</td>";
                                                        
                              echo "</tr>";
                            
                              }       
                              echo "</table>"; */

                            echo "<table class=\"table\">\n";
                            echo "<thead><tr>
                           
                            <th>Id</th>

                            <th>Login</th>

                            <th>Uprawnienia</th>  

                            <th>Zobacz profil</th>                            
                            
                            
                            <th>Usuń użytkownika</th>

                            </thead>\n";
                            while($wiersz=mysqli_fetch_array($wynik)){                                

                            echo "\t<tr>\n";
                            echo "<td>" . $wiersz['user_id'] . "</td>";                                                            
                            
                            echo "<td>" . $wiersz['login']." </td>";                                                     
                            
                            echo "<td>" . $wiersz['uprawnienia']."</td>"; 

                            echo '<td><form action="seeProfiles.php" method="post">
                            <input type="hidden" name="wybrane_id" value="'.$wiersz['user_id'].'"> 
                            <input type="hidden" name="wybrany_login" value="'.$wiersz['login'].'"> 
                            <input type="hidden" name="wybrane_uprawnienia" value="'.$wiersz['uprawnienia'].'"> 
                            <input type="submit" value="Zobacz" name="zobacz">
                            </form></td>';

                            echo '<td><form action="functions/deleteUser.php" method="post">
                            <input type="hidden" name="wybrane_id" value="'.$wiersz['user_id'].'"> 
                            <input type="submit" value="Usuń" name="wybierz">
                            </form></td>';

                            echo "\t</tr>\n";
                            }
                            echo "</table>\n";
                            
                            
                          if(!mysqli_query($link, $query)){
                           echo "BŁĄD: Nie można wyświetlić listy użytkowników";
                          }

                        
                          ?>

                        </p>        
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 
