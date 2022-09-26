<?php
include_once '../../configuracio.php';
$datos=data_submitted();
$objPersona=new AmbPersona();
$resutadoAlta=$objPersona->alta($datos);


//var_dump($resutadoAlta);

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
            
            if($resutadoAlta){
                echo("<h2>La persona fue cargada con exito</h2>");
            }// fin if 
            else{
                echo("<h2>Hubo problemas con la carga</h2>");

            }// fin else
            ?>

        </div>

    </div>
    
</body>
</html>