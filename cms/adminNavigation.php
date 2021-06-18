<?php
 $login = $_SESSION['login'];
?>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Panel administratora</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../index.php">Strona główna</a></li>                       
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../functions/logout.php">Wyloguj się</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">                            
                            <div class="sb-sidenav-menu-heading">Panel zarządzania</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kategorie
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addCategoriesForm.php">Dodaj kategorie</a>
                                    <a class="nav-link" href="categoriesList.php">Lista kategorii</a>
                                </nav>
                            </div>    
                                                                                                                          
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Słówka
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                    <a class="nav-link" href="addWordsForm.php">Dodaj słówko</a>
                                    <a class="nav-link" href="wordsList.php">Wyświetl listę słówek</a>
                                    
                                </nav>
                            </div>
                            <a class="nav-link" href="usersList.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Użytkownicy
                            </a>
                            <a class="nav-link" href="editAdminForm.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                                Edytuj profil
                            </a>
                           
                            
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">                    
                        <div class="small">Zalogowany jako: 
                        <?php
                          echo "<b>".$login."</b>" ;
                        ?>
                        </div>                                            
                    </div>
                </nav>
            </div>