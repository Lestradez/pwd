<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/pwd/dirs.php'); 
function guardarArchivo ($data){
  $result["error"]=$data["error"];
  if ($data["error"] <= 0) {
    $formatos_permitidos =  array('jpg','png','jpeg','gif');
    $result ["nombre"] = $data['name'] ;
    $extension = pathinfo($result['nombre'], PATHINFO_EXTENSION);
    $result ["tipo"] = $data['type'] ;
    $result ["tamaño"] = ($data['size']/1048576 ) ;
    
    if(in_array($extension, $formatos_permitidos) ) {
      if($data["size"]/1048576 < 2 ){        
        if (!copy($data['tmp_name'],dirname(__DIR__).'/files/'.$data['name'])) {
          $result ['resultado'] = "ERROR: no se pudo cargar el archivo ";
        } else {
          $result ['resultado'] = "El archivo ".$data['name']." se ha copiado con Éxito";
          $result ['enlace'] = BASE_URL.'tp_3/ejercicio_3/files/'.$data['name'];
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

function validarFormulario ($data, $fileData){

  $data['url-image']=$fileData['enlace'];
      
  return $data;
  }
?>