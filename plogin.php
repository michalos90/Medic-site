<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);

$p_login_is_true=null;
$pacjentid=null;

if (isset($_POST["login"]) && isset($_POST["password"])) {

    $login = $_POST["login"];
    $password = $_POST["password"];


    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "przychodnia";


    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

    $zapytanie = "SELECT * FROM `pacjent` WHERE `login` = '$login' AND `password` = '$password'";
    $result = $polaczenie->query($zapytanie);


    while ($row = mysqli_fetch_row($result)) {
        "<tr>";

        if ($row[7] == $login && $row[8] == $password) {
            $_SESSION[p_login_is_true] = true;
            $_SESSION[pacjentid]=$row[4];

        }

    }


}

if ($_SESSION[p_login_is_true] == true) {

    echo " <script type='text/javascript'>";
    echo "location.href='patients.php'";
    echo "</script>";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form{
            width: 20%;
            margin: 0 auto;



        }

		
		
		
 




    </style>
	    <link rel="stylesheet" href="mystyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="UTF-8" action="patients.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form method="post">
    <h1>Logowanie pacjenta</h1>

    <div class="form-group">
        <input type="text" class="form-control" name="login" id="login" placeholder="Wprowadź login" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Wprowadź hasło" required>
    </div>
  <button type='submit' class="form-control">Zaloguj</button>
    <button type="button"class="form-control"  ><a href="Index.php">powrót<a/></button>
</form>




</body>
</html>







