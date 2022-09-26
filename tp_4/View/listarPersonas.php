<?php
include_once '../configuracio.php';
$objPersona=new AmbPersona();
$arrayObjPersonas=$objPersona->buscar(null);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
</head>
<body>
    <h1>Listado de Personas Registradas</h1>
    <table name="listado" id="listado">
        <?php
        foreach($arrayObjPersonas as $unaPersona){
            echo("<tr> <th>Nombre</th> <th>Apellido</th> <th>Fecha Nacimiento</th> 
            <th>Telefono</th> <th>Domicilio</th> <th>nro Documento</th> </tr>");
            echo("<tr> <td>".$unaPersona->getNombre()."</td> <td>".$unaPersona->getApellido()."</td> <td>".$unaPersona->getfechaNac()."</td> 
            <td>".$unaPersona->getTelefono()."</td> <td>".$unaPersona->getDomicilio()."</td> <td>".$unaPersona->getDni()."</td> </tr>"); 
 
        }// fin for 
        ?>

    </table>
    <br>
    <a href="./autosPersonas.php">Ver autos</a>

    
</body>
</html>