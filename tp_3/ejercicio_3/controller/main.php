<?php

if ($_POST && $_FILES) {  
  include_once dirname( __DIR__ ) .'/model/main.php';
  $fileData = guardarArchivo($_FILES['formFile']);
  $arrayData = validarFormulario($_POST, $fileData);
  include_once dirname( __DIR__ ) .'/view/resultado.php';
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>