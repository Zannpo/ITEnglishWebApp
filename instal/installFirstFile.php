<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
//Sprawdzenie czy plik config istnieje
if(file_exists("../config/con.fig.php"))
{    
    //Sprawdzenie czy plik config jest zapisywalny
    if(is_writable("../config/con.fig.php"))
    {

    header("location:installSecondFile.php");
   
    }
    else{
        echo "BŁĄD! Plik konfiguracyjny nie jest zapisywalny!";
        echo "<br>";
        echo "Zmień prawa dostępu do pliku con.fig.php. Zrób to ręcznie lub za pomocą formularza podanego poniżej.";   
        echo "<br>";
        echo "Wybierając metodę formularza wpisz prawa dostępu w formacie liczbowym. Przykładowe ustawienie:";        
        echo "<br>";
        echo "0644";
        echo "<br>";
        echo "Jako pierwszą liczbę wpisz 0, aby wybrać system ósemkowy.";
        echo "<br>";        
        echo "<br>";

        ?>

    <form method="POST" action="#!">
      <input type="text" id="file_permissions" name="file_permissions" placeholder="Podaj nowe ustawienia" required="">
      <br>
      <br>     
      <input type="submit" value="Zmień ustawienia pliku">     
    </form>

   <?php
   //Zmiana praw dostępu do pliku con.fig.php
        if( $_POST['file_permissions'] <> NULL)
        {
            chmod("../config/con.fig.php",$_POST['file_permissions']);     
        }        
    }
   
}
else
{
    echo "BŁĄD!";
    echo "Plik konfiguracyjny nie został znaleziony bądź nie istnieje.";
    echo "<br>";
    echo "Stwórz plik konfiguracyjny lub przenieś go do folderu config.";
    echo "<br>";
    echo "Bądź zmień jego nazwę na con.fig.php";
    echo "<br>";
    echo "<div class=\"btn-group\">\n";
    echo "<a class=\"btn btn-warning\" href=#!> Odśwież </a>\n";
    echo "</div>\n";
    
}
?>