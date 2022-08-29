<?php
function cuentaDeportes ($data){
    $data['cantDeportes'] = 0;
    if(array_key_exists('gridDeporte',$data)){
        $data['cantDeportes'] = count($data['gridDeporte']);
    }

    return $data;
} 

?>