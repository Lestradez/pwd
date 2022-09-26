<?php
include_once '../../configuracio.php';
$objAuto=new AmbAuto();
$objPersona=new AmbPersona();
$datos=data_submitted();
//echo($datos['dniDuenio']."<br>");
$autos=$objAuto->autosConMismoDuenio($datos['dniDuenio']);
$arrayPersona=$objPersona->personaConDni($datos['dniDuenio']);
//var_dump($arrayPersona); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos asociados a los dueños</title>
</head>
<body>
    <div class="container">
        <div class="">
            <h3>Datos de la Persona</h3>
            <?php
            if($arrayPersona==null){
                echo("<h3>La persona no se encuentra registrada</h3>");

            }// fin if 
            else{
            echo("<p> NOMBRE: ".$arrayPersona->getNombre()." </p>");
            echo("<p> APELLIDO: ".$arrayPersona->getApellido()." </p>");
            echo("<p> DNI: ".$arrayPersona->getDni()." </p>");
            echo("<p> TELEFONO: ".$arrayPersona->getTelefono()." </p>");
            echo("<p> FECHA DE NACIMIENTO: ".$arrayPersona->getfechaNac()." </p>");
            echo("<p> DOMICILIO: ".$arrayPersona->getDomicilio()." </p>");
            }// fin else
            
            ?>
            <h4>Autos</h4>
            <?php
            foreach($autos as $unAuto){
                if($unAuto<>null){

                    echo("<p> Patente de auto: ".$unAuto->getPatente()."</p>");
                    echo("<p> Marca: ".$unAuto->getMarca()."</p>");
                    echo("<p> Modelo: ".$unAuto->getModelo()."</p>");
                    echo("<p>DNI del dueño: ".$unAuto->getDni()."</p>");


                }// fin if 
                else{
                    echo("<p>La persona No posee autos </p>");

                }// fin else
                
            }// fin for 
            ?>




        </div>

    </div>
    
</body>
</html>