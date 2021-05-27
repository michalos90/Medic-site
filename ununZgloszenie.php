<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "przychodnia";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);


$zapytanie = "DELETE FROM `nwizyta` WHERE `id` = '$_POST[del]'";
$result = $polaczenie->query($zapytanie);
$polaczenie->close();


echo " <script type='text/javascript'>";
echo "location.href='adminpanel.php'";
echo "</script>";



?>
