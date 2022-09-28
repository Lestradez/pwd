<?php
include_once '../configuracio.php';
$objPersona=new AmbPersona();

// NOTA: como el metodo modificar me pide todos los datos para realizar la modificacion por eso pase todos los datos. Por 
// que solo cambie uno de ellos. 
$datos=data_submitted(); 
//var_dump($datos);
$resultado=$objPersona->modificacion($datos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  Link de Boostrap-->

</head>
<body>
    <div class="container">
        <div class="">
            <?php 
            if($resultado){
                echo("<p>La modificacion se realizó con éxito</p>");
            }// fin if 
            else{
                echo("<p>Hubo errores en la modificacion de los datos</p>");

            }// fin else
            ?>


        </div>
    </div>
    
</body>
</html>
