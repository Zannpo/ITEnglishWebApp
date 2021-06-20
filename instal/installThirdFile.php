<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
$host = $_POST['host_name'];
$database = $_POST['db_name'];
$user = $_POST['user_name'];
$password =$_POST['password'];
$prefix = $_POST['prefix'];


$link = new mysqli($host, $user, $password, $dbname);

// Sprawdzenie połączenia
if ($link->connect_error) {
    echo "Nie udało się połączyć z bazą danych.";
    echo "<br>";
    echo "Błąd: ". $link->connect_error;
    echo "<br>";
    echo "<div class=\"btn-group\">\n";
    echo "<a class=\"btn btn-warning\" href=installSecondFile.php> Zmień dane połączenia </a>\n";
    echo "</div>\n";
    
}
else{
    $config_file = "../config/con.fig.php"; 
 
    //Plik otwarty do nadpisania
    $file = fopen($config_file, "w"); 

    $infoToWrite = "<?php"."\n"      
    .'$host='."'".$_POST['host_name']."'".';'."\n"
    .'$user='."'".$_POST['user_name']."'".';'."\n"
    .'$password='."'".$_POST['password']."'".';'."\n"
    .'$dbname='."'".$_POST['db_name']."'".';'."\n"
    .'//$prefix='."'".$_POST['prefix']."'".';'."\n"                    

    .'$link = new mysqli($host, $user, $password, $dbname);'."\n"
    
    .'if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }'."\n"
   

    .'?>'."\n";
    fwrite($file, $infoToWrite);    
    

    fclose($file); 

    header("location:installFourthFile.php");
}

?>