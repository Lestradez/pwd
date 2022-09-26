<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Datos  de la persona</h3>
        <div class="">
            <form name="cargaPersona" id="cargaPersona" method="POST" action="./accion/accionNuevaPersona.php">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="Nombre" id="Nombre" required><br>
                <label for="apellido">Apellido:</label><br>
                <input type="text" name="Apellido" id="Apellido" required><br>
                <label for="dni">DNI:</label><br>
                <input type="number" name="NroDni" id="NroDni" required><br>
                <label for="telefono">Telefono:</label><br>
                <input type="tel" name="Telefono" id="Telefono" required><br>
                <label for="fechaNac">Fecha de Nacimiento:</label><br>
                <input type="text" name="fechaNac" id="fechaNac" required><br>
                <label for="domicilio">Domicilio:</label><br>
                <input type="text" name="Domicilio" id="Domicilio" required><br><br>
                <input type="submit" name="cargar" value="Cargar">
                
            </form>
        </div>

    </div>
    
</body>
</html>