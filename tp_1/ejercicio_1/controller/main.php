<?php
if ($_POST){
  include_once dirname( __DIR__ ) .'/model/vernumero.php';
  $mensaje = vernumero($_POST['number']);
  include_once dirname( __DIR__ ) .'/view/resultado.php';
} else{
  include_once dirname( __DIR__ ) .'/view/index.php';
}
?>