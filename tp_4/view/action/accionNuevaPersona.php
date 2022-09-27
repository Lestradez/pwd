<?php 
$title="Buscar Auto";
include_once ("../../config.php"); 
include_once ("../layout/head.php");
include_once ("../layout/navbar.php");
$datos=data_submitted();
$objPersona=new AmbPersona();
$resutadoAlta=$objPersona->alta($datos);
?>
<section class="main-container p-5">




</section>
<?php
include_once ("../layout/footer.php");
?>