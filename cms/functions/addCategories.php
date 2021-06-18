<?php
session_start();
if(file_exists("../../config/con.fig.php")) require_once("../../config/con.fig.php");	
?>
<?php 

$nazwa = htmlspecialchars($_POST['nazwa']);
$opis = htmlspecialchars($_POST['opis']);

$queryToCheck ="SELECT * FROM categories WHERE nazwa = '".$nazwa."'";   
$result = mysqli_query($link,$queryToCheck);

$number = 0;

while($row=mysqli_fetch_array($result)){
    
  if($row['nazwa'] == $nazwa)
  {
    $number = $number + 1;
  }
  
}

if($number == 0)
{
    $query = "INSERT INTO categories (category_id, nazwa,opis) VALUES(NULL,'".$nazwa."','".$opis."')";

    if(mysqli_query($link, $query)){   
        header("location:../successfulAction.php");
         
    } else{
      header("location:../errorAction.php");
    }
}
else
{
    echo "Taka kategoria już istnieje";
}


?>