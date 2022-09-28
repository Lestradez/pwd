<?php 
$title="Cambio de Dueño";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");

$datos=data_submitted();

$objAuto=new AmbAuto();
$objPersona=new AmbPersona();
$objAutoRec=$objAuto->autoConPatente($datos['patente']);// obtiene como obj el auto que esta en la BD con la patente dada
$personaDni=$objPersona->personaConDni($datos['NroDni']);
$datosAuto['Patente']=$objAutoRec->getPatente();
$datosAuto['Marca']=$objAutoRec->getMarca();
$datosAuto['Modelo']=$objAutoRec->getModelo();
$datosAuto['DniDuenio']=$personaDni->getDni();
$estaAuto=$objAuto<>null;
$estaPersona=$personaDni<>null;




?>

<section class="main-container p-5">
        <div>
            <?php
            if($estaAuto && $estaPersona){
                $resultado=$objAuto->modificacion($datosAuto);
                if($resultado){
                    echo("<p>Se modifico exitosamente el dni del dueño del auto</p>");
                }// fin if
                else{
                    echo("<p>No se pudo modificar el dni del dueño del auto</p>");
                }// fin else

            } // fin if 
            else{
                echo("<p>La persona con el dni ingresado no se encuentra en la base de datos</p>");

            }// fin else
            ?>
        </div>

  </section>
<?php
include_once ("../layout/footer.php");
?>