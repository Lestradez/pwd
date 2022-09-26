<?php
include_once '../cambioDuenio.php';
$datos=data_submitted();

$objAuto=new AmbAuto();
$objAuto=$objAuto->autoConPatente($datos['Patente']);// obtiene el array de la tabla con la patente dada por el formulario
$datosAuto['Patente']=$objAuto->getPatente();
$datosAuto['Marca']=$objAuto->getMarca();
$datosAuto['Modelo']=$objAuto->getModelo();
$datosAuto['DniDuenio']=$datos['NroDni']; //$objAuto->getDuenio()->getDni();
$resultado=$objAuto->modificacion($datosAuto);


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
    <div class="container">
        <div>
            <?php
            if($resultado){
                echo("<p>Se modifico exitosamente el dni del dueño del auto</p>");

            } // fin if 
            else{
                echo("<p>No se pudo modificar el dni del dueño del auto</p>");

            }// fin else
            ?>
        </div>

    </div>
    
</body>
</html>