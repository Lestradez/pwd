<?php
include_once '../../configuracio.php';
$datos=data_submitted();
$objAuto=new AmbAuto();

$objArrayAutos=$objAuto->buscar(null);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificacion</title>
</head>
<body>
    <h3>Datos del auto</h3>
    <table name="tablaAuto" id="tablaAuto">
        <?php
        $contador=0; 
        foreach ($objArrayAutos as $unAuto){
            if($datos['patente']==$unAuto->getPatente()){
                echo("<tr> <th>Modelo</th> <th>Marca</th> <th>Patente</th> <th>Dni del Dueño</th> </tr>");
                echo("<tr> <td>".$unAuto->getModelo()."</td> <td>".$unAuto->getMarca()."</td> <td>".$unAuto->getPatente()."</td> <td>".$unAuto->getDni()."</td> </tr>"); 
                $contador++;
            }// fin if 

        }// fin for

        if($contador==0){
            echo("<div> La patente del auto o se encuentra registrada </div>");

        }// fin if


        ?>
    </table>
    
</body>
</html>