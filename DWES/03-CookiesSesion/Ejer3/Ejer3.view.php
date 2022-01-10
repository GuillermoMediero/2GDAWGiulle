<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer3</h1>
    <p>Idioma: <?= $idioma ?></p>
    <form action="Ejer3.php" method="POST">
    <label>Elije un idioma </label>
    <select name="idioma" id="id">
        <option value="Castellano">Castellano</option>
        <option value="Euskera">Euskera</option>
    </select>
    <input type="submit" value="Guardar">
    </form>
</body>
</html>