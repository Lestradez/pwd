<?php
// SE ENCARGA DE VERIFICAR Y GESTIONAR LOS DATOS CON LA BASE DE DATOS

// VERIFICACION STANDAR DE DATOS 
/**
 * @param string datos 
 * @return string
 */
function testData($data){
    //$data=trim($data); // elimina los espacios vacios
    //$data=stripslashes($data); //elimina los /
    $data=htmlspecialchars($data); // brinda seguridad al hackeo de datos
    return $data; 

}// fin function  

/**
 * VERIFICA SI LOS CAMPOS ESTAN VACIOS O NO 
 * @param array
 * @return boolean
 */
function datosVacios($arrayDatos){
    $salida=true;
    foreach($arrayDatos as $key=>$dato){
        if(!isset($dato)){ // si esta vacio o null la negacion (!) dara verdadero
            $salida=false; 

        }// fin if 
    }// fin for 

    return $salida; 

}// fin function

/**
 * VERIFICA QUE EL AÑO DE LA PELICULA NO SEA MAYOR AL AÑO 
 * ACTUAL
 * @param int anio
 * @return boolean
 */
function anioPelicula($anio){
    $salida=true;
    $anioActual=(int)date("Y");
    if($anio>$anioActual){
        $salida=false;
    }// fin if 
    return $salida; 

}// fin function

?>