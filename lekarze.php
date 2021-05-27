<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

?><!DOCTYPE html>


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
                <a class="nav-link" href="index.php">powrót do głównej</a>
            </li>




        </ul>

    </nav>
    <h3>Doctors</h3>

    <table class="table" id="lekarze">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Specjalizacja</th>
            <th scope="col">Telefon</th>
            <th scope="col">pensja</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "przychodnia";
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);





        $zapytanie = "SELECT * FROM `lekarz`";
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