<?php
if ($_POST){  
  include_once dirname( __DIR__ ) .'/model/main.php';
  $arrayData = validarFormulario($_POST);
  include_once dirname( __DIR__ ) .'/view/resultado.php';
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>