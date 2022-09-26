<?php
include_once '../configuracio.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR AUTO</title>
</head>
<body>
    <h1>Busque su auto</h1>
    <div class="container">
        <div class="">
            <form action="./accion/accionBuscarAuto.php"  method="get">
                <label for="patente"> Patente del auto:</label><br>
                <input type="text" name="patente" id="patente"><br><br>
                <input type="submit" name="buscar" id="buscar" value="buscar">
            </form>

        </div>

    </div>
    
</body>
</html>