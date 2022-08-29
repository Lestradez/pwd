<?php
if ($_FILES){  
  include_once dirname( __DIR__ ) .'/model/main.php';
  $arrayData = guardarArchivo($_FILES['formFile']);
  include_once dirname( __DIR__ ) .'/view/resultado.php';
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>