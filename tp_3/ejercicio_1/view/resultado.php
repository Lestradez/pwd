<!DOCTYPE html>

<head>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
</head>

<body>
  <div  class="container-fluid">
    <div class="container col-md-5" style="margin:30px;">
      <h2>Resultado del Ejercicio N°1:</h2>
      <div class="mb-3">
        <?php         
          echo '<p class="lead">'.$arrayData['resultado'].'</p>';
          if(isset($arrayData['enlace'])){
            echo "<p></p>Nombre: " . $arrayData['nombre'] ."</p>";
            echo "<p>Tipo: " . $arrayData['tipo'] ."</p>";
            echo "<p>Tamaño: " . $arrayData['tamaño'] ."</p>";
            echo '<a href="'.$arrayData['enlace'].'" class="btn btn-primary" target="_blank">   Ver Archivo</a>';
            }
        ?>
      </div>
    <div class="mb-3">
    <a href= "<?php dirname( __DIR__ ) .'/index.php'; ?>" class="btn btn-primary">Volver</a>    
    </div>
  </div>
</body>