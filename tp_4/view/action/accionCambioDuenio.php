<?php 
$title="Cambio de Dueño";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");

$datos=data_submitted();

$objAuto=new AmbAuto();
$objAuto=$objAuto->autoConPatente($datos['patente']);// obtiene el array de la tabla con la patente dada por el formulario
$datosAuto['Patente']=$objAuto->getPatente();
$datosAuto['Marca']=$objAuto->getMarca();
$datosAuto['Modelo']=$objAuto->getModelo();
$datosAuto['DniDuenio']=$datos['NroDni']; //$objAuto->getDuenio()->getDni();
$resultado=$objAuto->modificacion($datosAuto);


?>

<section class="main-container p-5">
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

  </section>
<?php
include_once ("../layout/footer.php");
?>