<?php
if ($_GET||$_POST){
  include_once dirname( __DIR__ ) .'/model/main.php';
  if ($_GET)
    $arrayDatos = creaArray($_GET);
  else 
    $arrayDatos = creaArray($_POST);
  include_once dirname( __DIR__ ) .'/view/resultado.php';
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>