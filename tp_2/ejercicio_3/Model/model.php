<?php


// VERIFICACION DE DATOS CON PHP
/**
 * @param array datos 
 * @return boolean
 */
function datosVerificados($datos){
    // BOOLEAN: salida
    $salida=true;
    $esVacio="";
    foreach($datos as $clave=>$valor){
        $valor=trim($valor);
        $valor=htmlspecialchars($valor);
        if($esVacio==$valor){
            $salida=false; 
        } // fin if

    }// fin for 
 

    return $salida; 
}// fin function 

// VERIFICACION SI LOS DATOS INGRESADOS POR LA PAGINA ESTAN EN LOS DATOS GUARDADOS
/**
 * vPwd: Verifica que la contraseña del usuario sea segura 
 * @param string usuario
 * @return boolean
 * 
 */

function vPwd($dato){
    //STRING: pwd,name      INT: longitud    BOOLEAN: esIgual
    $pwd=$dato["clave"];
    $name=$dato["usuario"];
    $longitud=strlen($pwd); //longitud de la contraseña 
    $esIgual=strcmp($name,$pwd); // compara la contraseña con el usuario
    $contLetra=0;
    $contNumero=0;

    for($i=0; $i<$longitud; $i++){
       // variable que cuanta la cantidad de digitos y otra de letras
       if((int)$pwd[$i]==0){ // significa que es un string (letra o cualquier otro caracter)
        $contLetra++;
       }// fin if
       else{ // es un numero
        $contNumero++;
       }// fin else
    }// fin for 

    // verificacion de requisitos 
    if($esIgual || $longitud<8 || $contLetra==0 ||  $contNumero==0){
        $salida=false; // contraseña insegura

    }// fin if 
    else{
        $salida=true; // contraseña segura 

    }// fin else 


    return $salida; 

}// fin function 

// VERIFICAC SI SE ENCUENTRA EN LOS DATOS ALMACENADOS 
/**
 * @param array datosUsuario
 * @return boolean 
 * 
 */
function estaUsuario($datosUsuario){
// DATOS ALMACENADOS 
$datos[0]["usuario"]
$datos[0]["clave"]; //=array("usuario"=>"pablo","clave"=>"Urra2022");
$datos[1]["usuario"]="dani";
$datos[1]["clave"]="dani123";
$datos[2]["usuario"]="juan";
$datos[2]["clave"]="888";
$datos[3]["usuario"]="esteban";
$datos[3]["clave"]="e123";
$datos[4]["usuario"]="mari";
$datos[4]["clave"]="M147";
// ---------------------------------------------
$bandera=false;
$k=0;  
while(!$bandera && $k<sizeof($datos)){
    if($datos[$k]["usuario"]==$datosUsuario["usuario"] && $datos[$k]["clave"]==$datosUsuario["clave"]){
        $bandera=true; 
    }// fin if
    else{
        $k++;

    }// fin else

}// fi while 

return $bandera; 

}// fin function 
