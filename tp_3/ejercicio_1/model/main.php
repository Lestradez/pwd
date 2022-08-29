<?php
function guardarArchivo ($data){
    if ($data["error"] <= 0) {
      $result ['resultado']='';
      $formatos_permitidos =  array('doc','pdf');
      $archivo = $data['name'];
      $extension = pathinfo($archivo, PATHINFO_EXTENSION);
      $result ["nombre"] = $data['name'] ;
      $result ["tipo"] = $data['type'] ;
      $result ["tamaño"] = ($data['size']/1048576 ) ;
      $result ["carpeta temporal"] = $data['tmp_name'];
      
      
      if(in_array($extension, $formatos_permitidos) ) {
        if($data["size"]/1048576 < 2 ){
          
          if (!copy($data['tmp_name'],dirname(__DIR__).'/files/'.$data['name'])) {
            $result ['resultado'] = "ERROR: no se pudo cargar el archivo ";
          } else {
            $result ['resultado'] = "El archivo ".$data['name']." se ha copiado con Éxito";
            $result ['enlace'] = dirname($_SERVER['REQUEST_URI']).'/ejercicio_1/files/'.$data['name'];
          }
        } else{
          $result ['resultado'] = "El archivo es demasiado grande. El limite es de 2mb.";
        }
      } else {
        $result ['resultado'] = 'Error formato no permitido !!';
       }
    } else
     $result ['resultado'] = "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal.";
      
  return $result;
  }
?>