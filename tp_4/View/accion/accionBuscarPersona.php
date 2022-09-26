<?php
include_once '../../configuracio.php';
$dato=data_submitted(); 
$objPersona=new AmbPersona();
$personas=$objPersona->personaConDni($dato['dni']);// devuelve el obj persona con el dni dado por parametro
//echo($personas->getNombre());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos a modificar</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Fecha Nacimiento</th>
            <th>Domicilio</th>
        </tr>
        <tr>
            <?php
            foreach($personas as $unaPersona){
                echo '<td><a href="../actualizarDatosPersona.php">editar</a> nombre </td>';

            }  // fin for 
             ?>
            <td><?php echo($personas->getNombre()); ?></td>
            <td><?php echo($personas->getApellido()); ?></td>
            <td><?php echo($personas->getTelefono()); ?></td>
            <td><?php echo($personas->getfechaNac()); ?></td>
            <td><?php echo($personas->getDomicilio()); ?></td>
        </tr>

    </table>
    
</body>
</html>