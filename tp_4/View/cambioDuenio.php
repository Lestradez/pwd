<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class=container>
        <div class="">
            <h2>
                Modificacion del documento del dueño del Auto
            </h2>
            <form action="./accion/accionCambioDuenio.php" name="cambiaDuenio" method="POST";>
                <label for="Patente">Ingrese la patente del auto:</label><br>
                <input type="text" name="Patente" id="Patente" required><br>
                <label for="NroDni">Ingrese el DNI de la persona:</label><br>
                <input type="number" name="NroDni" id="NroDni" required><br>
                <input type="submit" value="Cambiar Dni">
                

            </form>
        </div>
    </div>
</body>
</html>