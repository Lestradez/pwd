<?php
include_once '../configuracio.php';
/**
 * BASE DE DATOS
 * insert => ok
 * update => ok
 * delete => OK
 * REGISTRO=> ok tengo que usar el select primero antes del registro 
 * si no no va encontrar nada para mostrar
 */

 /**
  * TABLA PERSONA 
  * Antes de ingresar los datos a la BD seteo el obj y luego aplico los metodos
  * cargar =>  ver para que sirve y como funciona
  *insertar =>  ok
  *Modificar => ok
  *Eliminar => ok
  *Listar => ok
  *Buscar =>  la idea es que seleccione todo y ponga la condicion 
  * where para que muestre como un array asociativo del registro dado
  */

    $BD=new BaseDatos();
    $objPersona=new Persona();
    $objPersona->setear('jdjdjdj','Guitierrez','1988-9-24','2994777444','San Martin 123',333000111);

    $sql="SELECT Nombre,Apllido,Domicilio FROM persona WHERE NroDni=".$objPersona->getDni();
    $resultado=$BD->query($sql);

    var_dump($resultado);

  /** 
    echo("LISTAR <br>");
   $objPersona = new Persona(); 
   $objPersona->setear('jdjdjdj','Guitierrez','1988-9-24','2994777444','San Martin 123',333000111);
    //$objPersona->cargar();
  
   //echo($objPersona->getNombre()); 
   $r=$objPersona->listar(" Nombre = Claudia"); 
   var_dump($r); 
    */


















/** 
  $objBd=new BaseDatos();

echo("Probando  REGISTRO-SELECT <br>");

$sql = "SELECT * FROM persona ";
$res = $objBd->Ejecutar($sql);
//echo("VALOR DE RES  <br>");
//var_dump($res);
if($res>-1){
    if($res>0){
        echo "<br> La cantidad de registros encontrados por la operacion fueron :".$res;
        while ($reg = $objBd->Registro()){
           // echo("VALOR DE REG <br>");
            //var_dump($reg);
            echo "<pre>";
            print_r($reg);
            echo "</pre>";
        }
        
    }else{
        echo "<br> No han encontrado registros.";
    }
    
} else {
    echo "<br>No fue posible realizar la operacion.";
}
*/






?>