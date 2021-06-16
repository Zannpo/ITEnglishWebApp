<?php
//tutaj będą wszystkie funkcje używane do obsługi userów

function wyswietl_wszystkich(){
    //zmienić to na wyświetlenie w tabeli
    $query="SELECT * FROM users";
    #echo $query;
    $wynik = mysqli_query($link,$query);
    while($wiersz=mysqli_fetch_array($wynik)){

    echo $wiersz[0]." ".$wiersz[haslo]." ".$wiersz[login]."<br>\n";
}

function dodaj_uzytkownika(){
    
global $link, $prefix
  
        

}

?>