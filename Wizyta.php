<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

if($_SESSION[p_login_is_true]==false){
    echo " <script type='text/javascript'>";
    echo "location.href='admin.php'";
    echo "</script>";
}
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "przychodnia";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.form-group {
            width: 20%;
        }
		
		
 




    </style>
	    <link rel="stylesheet" href="mystyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="Doctors.php">Doktorzy</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="patients.php">Twoje Wizyty</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="plogout.php">Wyloguj</a>
        </li>
    </ul>

</nav>
<h3>Zgłoś Wizytę</h3>



<form id="cale" method="POST" action="ZgłośWizytę.php">
<div id="lol">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Wybierz specjalność</label>
        <select class="form-control" name="lekarz" id="exampleFormControlSelect1">
            <?php

            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            $zapytanie = "SELECT * FROM `lekarz`";
            $result = $polaczenie->query($zapytanie);
            while ($row = mysqli_fetch_row($result)) {
                echo"<option>$row[3]</option>";
            }
            $polaczenie->close();
            ?>
        </select>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <button type="submit" class="btn btn-primary">Zgłoś Wizytę</button>

</form>



</body>

</html>