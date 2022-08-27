<?php
if ($_GET){
  include_once dirname( __DIR__ ) .'/model/main.php';
  $arrayDatos = creaArray($_GET);
  if($arrayDatos['edad']>=18){
    include_once dirname( __DIR__ ) .'/view/resultado_mayor.php';    
  } else{
    include_once dirname( __DIR__ ) .'/view/resultado_menor.php';    
  }
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>