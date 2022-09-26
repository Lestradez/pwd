<?php
include_once '../../configuracio.php';
$datosGenerales=data_submitted();
$objAuto=new AmbAuto();
$objPersona=new AmbPersona();

$datosAuto['Patente']=$datosGenerales['Patente'];
$datosAuto['Modelo']=$datosGenerales['Modelo'];
$datosAuto['Marca']=$datosGenerales['Marca'];
$datosAuto['DniDuenio']=$datosGenerales['NroDni']; 

$datosPersona['NroDni']=$datosGenerales['NroDni'];
$datosPersona['Nombre']=$datosGenerales['Nombre'];
$datosPersona['Apellido']=$datosGenerales['Apellido'];
$datosPersona['Telefono']=$datosGenerales['Telefono'];
$datosPersona['Domicilio']=$datosGenerales['Domicilio'];

$resultadoAltaPersona=$objPersona->alta($datosPersona);
$resultadoAltaAuto=$objAuto->alta($datosAuto);


// persona

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
        <div class="">
            <?php
            if($resultadoAltaAuto && $resultadoAltaPersona){
                echo("<p> El alta se realizo con exitos !!!</p>");

            } // fin if
            else{
                echo("<p> Hubo problema con la carga </p>");

            }// fin else 
            ?>


        </div>

    </div>
    
</body>
</html>