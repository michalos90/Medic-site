<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

if($_SESSION[adminlogin]==false){
    echo " <script type='text/javascript'>";
    echo "location.href='admin.php'";
    echo "</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    form.usunwizyte{
        width: 10%;
    }
</style>
    <link rel="stylesheet" href="mystyle.css">

</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="adminpanel.php">Powrót do panelu Admina</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="psign.php">Dodaj Pacjenta</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="plogout.php">Wyloguj</a>
        </li>
    </ul>

</nav>

<table class="table" id="pacjent">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Wiek</th>
        <th scope="col">pesel</th>
        <th scope="col">miasto</th>
        <th scope="col">ulica</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "przychodnia";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $zapytanie = "SELECT * FROM `pacjent`";
    $result = $polaczenie->query($zapytanie);

    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<th scope='row'>$row[0]</th>";
        echo "<td> $row[1] </td>";
        echo "<td> $row[2] </td>";
        echo "<td> $row[3] </td>";
        echo "<td> $row[4] </td>";
        echo "<td> $row[5] </td>";
        echo "<td> $row[6] </td>";
        echo "</tr>";
        }
    $polaczenie->close();
    ?>
    </tbody>

</table>

<form class="usunwizyte" method="POST" action="usunpacjenta.php">



    <label for="exampleFormControlSelect1">wybierz pacjenta do usunięcia po ID</label>
    <select class="form-control" name="usunpacjenta" id="del">
        <?php

        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        $zapytanie = "SELECT * FROM `pacjent`";
        $result = $polaczenie->query($zapytanie);
        while ($row = mysqli_fetch_row($result)){
            echo"<option>$row[0]</option>";
        }
        $polaczenie->close();
        ?>
    </select>

    <div class="form-group">

        <button type="submit" class="btn btn-primary">usuń</button>
    </div


</form>




</body>

</html>