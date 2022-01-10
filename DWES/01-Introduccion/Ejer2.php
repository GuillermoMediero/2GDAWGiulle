<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer2</h1>
    <p>02. Crea dos variables llamadas nombre y edad. La variables nombre tendrá el
valor “Mikel” y la variable edad tendrá asignado el valor 22. A continuación crea
una página que muestre lo siguiente:
</p>
    <?php
        $nombre = "Mikel";
        $edad = 22;

        $resultado = "Mi amigo $nombre tiene $edad años";
        
        echo $resultado;
    ?>
</body>
</html>