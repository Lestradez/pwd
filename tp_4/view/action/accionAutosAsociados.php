<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");

$objAuto=new AmbAuto();
$objPersona=new AmbPersona();
$datos=data_submitted();
//echo($datos['dniDuenio']."<br>");
$autos=$objAuto->autosConMismoDuenio($datos['dniDuenio']);
$arrayPersona=$objPersona->personaConDni($datos['dniDuenio']);
//var_dump($arrayPersona); 
?>
<section class="main-container p-5">
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
                    echo("<p>DNI del dueño: ".$unAuto->getDuenio()."</p>");


                }// fin if 
                else{
                    echo("<p>La persona No posee autos </p>");

                }// fin else
                
            }// fin for 
            ?>




       </section>

<?php
include_once ("../layout/footer.php");
?>