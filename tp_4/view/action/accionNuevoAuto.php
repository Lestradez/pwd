<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");
?>
<section class="main-container p-5">


<?php

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
    


</section>
<?php
include_once ("../layout/footer.php");
?>