<?php
function horasSemana ($semana){
    $arraySemana = [];
    $totalHoras = 0;
    array_push($arraySemana, $semana['lunes'], $semana['martes'], $semana['miercoles'], $semana['jueves'], $semana['viernes']);
    foreach($arraySemana as $dias){
        $totalHoras = $totalHoras + $dias;
    }   
    return $totalHoras;
} 

?>