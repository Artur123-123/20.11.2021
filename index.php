<?php

$zur = "gituwa";

$jez = "fajen";

echo $zur. ' ' .$jez;

$host = "localhost";
$user = "root";
$password = "";
$dbname = "szkola";
$con = mysqli_connect($host, $user, $password);

if(!$con) {
    echo "nie połączono";
}

mysqli_select_db($con, $dbname);

$query = "SELECT * FROM `uczen`";
$result = mysqli_query($con, $query);
foreach($result as $uczen) {
    echo "<p style=color:red>" .$uczen['imie'] ."</p>";
    echo "<p style=color:blue>" .$uczen['nazwisko'] ."</p>";
}

// $host = "localhost";
// $user = "root";
// $password = "";
// 
// $con = mysqli_connect($host, $user, $password);
$dbname2 = "biblioteka";
mysqli_select_db($con, $dbname2);

$query2 = "SELECT * FROM `ksiazki`";
$result2 = mysqli_query($con, $query2);
echo mysqli_num_rows($result2);
foreach($result2 as $biblioteka) {
    echo "<p>" .$biblioteka['tytul'] ."</p>";
    echo "<p>" .$biblioteka['autor'] ."</p>";
    echo "<p>" .$biblioteka['cena'] ."</p>";
}

?>