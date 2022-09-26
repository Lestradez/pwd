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
<h1>Busqueda de Persona</h1>
    <div class="container">
        <div class="">
            <form action="./accion/accionBuscarPersona.php"  method="post">
                <label for="dni"> Ingrese su nro de documento:</label><br>
                <input type="number" name="dni" id="dni" required><br><br>
                <input type="submit" name="buscar" id="buscar" value="buscar">
            </form>

        </div>

    </div>
    
</body>
</html>