


    <html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        form {

            padding: 100px;

        }
		    </style>
			    <link rel="stylesheet" href="mystyle.css">

</head>

<body>
<form method="POST" action="RejestracjaPacjenta.php">
    <h1> Rejestracja pacjenta</h1>
    <div class="form-group">
        <input type="text" class="form-control" name="imie" id="imie" placeholder="Wprowadź imię"required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="nazwisko" id="nazwisko" placeholder="Wprowadź nazwisko"required>
    </div>

    <div class="form-group">
        <input type="date" class="form-control" name="wiek" id="wiek" placeholder="Wprowadź wiek" required>
    </div>  <div class="form-group">
        <input type="data" class="form-control" name="pesel" id="pesel" placeholder="Wprowadź pesel" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="miasto" id="miasto" placeholder="Wprowadź miasto" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="ulica" id="ulica" placeholder="Wprowadź ulicę" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="login" id="login" placeholder="Wprowadź login" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Wprowadź hasło" required>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <button type='submit' class="form-control">Dodaj</button>
    <button type="button"class="form-control"  ><a href="Index.php">powrót<a/></button>

</form>








</body>

</html>