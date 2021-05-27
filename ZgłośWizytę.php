<?php
session_start();
if($_SESSION[p_login_is_true]==false){
    echo " <script type='text/javascript'>";
    echo "location.href='admin.php'";
    echo "</script>";
}
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "przychodnia";


$imie=null;


$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$zapytanie = "SELECT * FROM `pacjent` WHERE `pesel` = '$_SESSION[pacjentid]'";
$result = $polaczenie->query($zapytanie);
while ($row = mysqli_fetch_row($result)){
    $imie=$row[1]." ".$row[2];

}


$zapytanie = "INSERT INTO `nwizyta` (`imie`, `pesel`, `specjalizacja`) VALUES ('$imie', '$_SESSION[pacjentid]', '$_POST[lekarz]');";
$result = $polaczenie->query($zapytanie);

$polaczenie->close();




if ($_SESSION[p_login_is_true] == true) {

    echo " <script type='text/javascript'>";
    echo "location.href='patients.php'";
    echo "</script>";


}
?>






