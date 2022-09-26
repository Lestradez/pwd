<?php
include_once '../../configuracio.php';
$objAuto=new AmbAuto();
$objPersona=new AmbPersona();
$datos=data_submitted();
//$autosPatente=$objAuto->autoConPatente($datos['Patente']);
//$personaObj=$objPersona->personaConDni($datos['NroDni']);

$autoPatente=$objAuto->autoConPatente($datos['Patente']);
$dniDuenioAuto=$autoPatente->getPatente();
$personaDni=$objPersona->personaConDni($datos['NroDni']);
$estaAuto=$objAuto<>null;
$estaPersona=$personaDni<>null;
//var_dump($estaAuto); 
//var_dump($estaPersona); 


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
                if($estaAuto && $estaPersona){
                    $nuevosDatos['Patente']=$autoPatente->getPatente();
                    $nuevosDatos['Marca']=$autoPatente->getMarca();
                    $nuevosDatos['Modelo']=$autoPatente->getModelo();
                    $nuevosDatos['DniDuenio']=$personaDni->getDni();
                    //var_dump($nuevosDatos);
                   // var_dump($nuevosDatos['DniDuenio']);
                    $resultado=$objAuto->modificacion($nuevosDatos);
                    var_dump($resultado); 
                    echo("<p>El dni del dueño se cambio exitosamente</p>");
                }// fin if
                else{
                    echo("<p>EL dni o la patente no se encuentran en la BD </p>");
                
                }// fin else

            ?>
        </div>

    </div>
    
</body>
</html>