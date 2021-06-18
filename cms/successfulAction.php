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
                        <h1 class="mt-4">Operacja zakończona sukcesem</h1>
                     
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 