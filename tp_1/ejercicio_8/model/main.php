<?php
function calculaEntrada ($data){
    $precio = 300;
    
    if($data['edad'] < 12){
      $precio = 160;
    }
    if (array_key_exists('estudiante', $data)){
      if ($data['estudiante'] == "on" && $data['edad'] >= 12) {
        $precio = 180;
      }
    }

    return $precio;
} 

?>