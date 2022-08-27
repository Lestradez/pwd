<?php
function vernumero($number){    
    $numero = $_POST['number'];
    if($numero==0){
        $mensaje = "El número ".$numero." es CERO";
        
    } else if ($numero>=1){
        $mensaje = "El número ".$numero." es POSITIVO";
       
    } else if ($numero<0){
        $mensaje = "El número ".$numero." es NEGATIVO";       
    } else {
    $mensaje = "Hubo un error, intente nuevamente";
    }
    return $mensaje;
};
?>