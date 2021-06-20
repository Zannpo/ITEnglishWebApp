<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
if(file_exists("../config/con.fig.php")) require_once ("../config/con.fig.php");	

echo "<b>Tworzenie struktury tabel</b>";
echo "<br>";
//Tabela users
$query="CREATE TABLE users
 (  user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    login VARCHAR(50) NOT NULL,
    haslo VARCHAR(100) NOT NULL,
    uprawnienia ENUM('1','0') NULL default NULL,    
    PRIMARY KEY(user_id))

    ";

    if(mysqli_query($link, $query))
    {echo "<br>";
    echo "Udało się utworzyć tabele users<br>";
    }
    else
    {echo "<br>";
    echo "BŁĄD: Tabela users już istnieje";     
    } 

//Tabela categories
$query = "CREATE TABLE `categories` (
  `category_id` int(3) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `opis` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
";
if(mysqli_query($link, $query))
{echo "<br>";
echo "Udało się utworzyć tabele categories<br>";
}
else
{echo "<br>";
echo "BŁĄD: Tabela categories już istnieje";     
} 

//Tabela profile
$query = "CREATE TABLE `profile` (
  `user_id` int(3) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `data_modyfikacji` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;";

if(mysqli_query($link, $query))
{echo "<br>";
echo "Udało się utworzyć tabele profile<br>";
}
else
{echo "<br>";
echo "BŁĄD: Tabela profile już istnieje";     
}

//Tabela words
$query="
CREATE TABLE `words` (
  `word_id` int(3) NOT NULL,
  `czesc_mowy` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `wersja_PL` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `wersja_ANG` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `opis_PL` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `opis_ANG` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `kat_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
";
if(mysqli_query($link, $query))
{echo "<br>";
echo "Udało się utworzyć tabele profile<br>";
}
else
{echo "<br>";
echo "BŁĄD: Tabela words już istnieje";     


//header("location:installFifthFile.php");

echo "<br>";
echo "<div class=\"btn-group\">\n";
echo "<a class=\"btn btn-primary\" href=installFifthFile.php> Przejdź dalej </a>\n";
echo "</div>\n";
}

?>


