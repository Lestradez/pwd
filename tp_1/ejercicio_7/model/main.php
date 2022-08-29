<?php
function creaArray ($data){

    switch($data['operacion']){
        case 'suma':
            $resultado = $data['num1'] + $data['num2'];
            $simbolo = '+';
            break;
        case 'resta':
            $resultado = $data['num1'] - $data['num2'];
            $simbolo = '-';
            break;
        case 'multiplicación':
            $resultado = $data['num1'] * $data['num2'];
            $simbolo = '*';
            break;
        case 'división':
            $resultado = $data['num1'] / $data['num2'];
            $simbolo = '/';
            break;
    }
    $data['resultado'] = $resultado;
    $data['simbolo'] = $simbolo;

    return $data;
} 

?>