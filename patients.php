<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

if($_SESSION[p_login_is_true]==false){
    echo " <script type='text/javascript'>";
    echo "location.href='plogin.php'";
    echo "</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="Doctors.php">Doktorzy</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="Wizyta.php">Zgłoś Wizytę</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="plogout.php">Wyloguj</a>
        </li>
    </ul>

</nav>
<h3>Twoje Wizyty</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Pacjent</th>
        <th scope="col">Pesel</th>
        <th scope="col">Lekarz</th>
        <th scope="col">Data</th>
        <th scope="col">Cena</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "przychodnia";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);





    $zapytanie = "SELECT * FROM `wizyty` WHERE `pesel` = '$_SESSION[pacjentid]'";
    $result = $polaczenie->query($zapytanie);


    $numer = 1;

    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<th scope='row'>$numer</th>";
        echo "<td> $row[1] </td>";
        echo "<td> $row[2] </td>";
        echo "<td> $row[3] </td>";
        echo "<td> $row[4] </td>";
        echo "<td> $row[5] </td>";
        echo "</tr>";
        $numer++;
    }
    $polaczenie->close();
    ?>
    </tbody>
</table>
</body>

</html>