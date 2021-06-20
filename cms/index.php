     <?php
        session_start();  
        if(file_exists("adminHead.php")) include("adminHead.php");	
        if(file_exists("adminNavigation.php")) include("adminNavigation.php");	
       
      ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Witamy w panelu administratora</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">W tym miejscu możesz dokonać niezbędnych zmian</li>
                        </ol>
                      
                                
                            </div>
                        </div>                                  
                   
<?php
if(file_exists("adminFooter.php")) include("adminFooter.php");	
?>         
                 
