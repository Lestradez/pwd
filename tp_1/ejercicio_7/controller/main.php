<?php
if ($_GET){
  include_once dirname( __DIR__ ) .'/model/main.php';
  $arrayDatos = creaArray($_GET);  
  include_once dirname( __DIR__ ) .'/view/result.php';    
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>