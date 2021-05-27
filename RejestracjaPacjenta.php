<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);


if (isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["wiek"]) && isset($_POST["miasto"])
    && isset($_POST["ulica"])&& isset($_POST["login"])&& isset($_POST["password"])&& isset($_POST["pesel"])) {
    $imie=$_POST["imie"];
    $nazwisko=$_POST["nazwisko"];
    $wiek=$_POST["wiek"];
    $miasto=$_POST["miasto"];
    $ulica=$_POST["ulica"];
    $login=$_POST["login"];
    $password=$_POST["password"];
    $pesel=$_POST["pesel"];
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "przychodnia";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $zapytanie = "INSERT INTO `pacjent` (`id`, `imie`, `nazwisko`, `wiek`, `pesel`, `miasto`, `ulica`, `login`, `password`) VALUES (NULL, '$imie', '$nazwisko', '$wiek', '$pesel', '$miasto', '$ulica', '$login', '$password')";
    $polaczenie->query($zapytanie);
    $polaczenie->close();
}


if($_SESSION[adminlogin]==ture){
    echo " <script type='text/javascript'>";
    echo "location.href='adminpanel.php'";
    echo "</script>";
}
else{
    echo " <script type='text/javascript'>";
    echo "location.href='index.php'";
    echo "</script>";


}


?>
