<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>PLACEHOLDER</h1>
<form action="toevoeg_view.php" method="POST">

    <input type="hidden" name="ID" value="<?= $rij['ID'] ?>" required>

    <label for="naam">Wat is het naam van het museum</label>
    <input type="text" id="naam" name="naam" required>
    <br><br>

    <br>
    <br>
    <a href='../index_verwerk.php'>Terug naar cafes</a>
</form>

</body>
</html>
