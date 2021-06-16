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
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
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

                            <th>Aktywność</th>

                            </thead>\n";
                            while($wiersz=mysqli_fetch_array($wynik)){                                

                            echo "\t<tr>\n";
                            echo "<td>" . $wiersz['user_id'] . "</td>";
                                                        
                            echo "<td>" . $wiersz['login'] . "</td>";                                                     
                                                                                  
                            echo "<td>" . $wiersz['uprawnienia'] . "</td>";

                            echo "<td>" . $wiersz['aktywny'] . "</td>";
                            echo "\t</tr>\n";
                            }
                            echo "</table>\n";

                            //echo "<td>". $wiersz[0]." ".$wiersz[haslo]." ".$wiersz[login]."<br>\n </td>";
                    
                            
                          if(!mysqli_query($link, $query)){
                           echo "BŁĄD: Nie można wyświetlić listy użytkowników";
                          }

                        
                          ?>
                        </p>                 
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
