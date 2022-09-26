<?php
include_once '../configuracio.php';
$objAuto=new AmbAuto();
$objPersona=new AmbPersona();

$listarPersonas=$objPersona->buscar(null);
$listaAutos=$objAuto->buscar(null);

foreach($listaAutos as $unAuto){
    echo($unAuto->getModelo()."<br>");
    echo($unAuto->getMarca()."<br>");
    echo($unAuto->getPatente()."<br>");
    foreach($listarPersonas as $unaPersona){
        if($unAuto->getDni()==$unaPersona->getDni()){
            echo($unaPersona->getNombre()."<br>"); 
            echo($unaPersona->getApellido()."<br>"); 

        }// fin if 

    }// fin for 
    echo("<br>");

}// fin for 

?>