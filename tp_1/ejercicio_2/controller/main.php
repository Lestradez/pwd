<?php
if ($_GET){
  include_once dirname( __DIR__ ) .'/model/horas_semana.php';
  $horas = horasSemana($_GET);
  include_once dirname( __DIR__ ) .'/view/resultado.php';
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>