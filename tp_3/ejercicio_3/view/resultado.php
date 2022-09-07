<!DOCTYPE html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="../../includes/bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../../includes/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../includes/bootstrap-icons-1.9.1/fonts/bootstrap-icons.woff">
    <script src="./js/main.js"></script>
  </head>
  <body class="bg-white">
    <section>
    <div  class="container-fluid">
      <div class="container mt-4 mb-4 shadow p-3 mb-5 bg-white rounded">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading text-primary">La pelicula introducida es:</h4>
          <b class="text-success">Titulo: </b><?php echo $arrayData['titulo'] ?><br>
          <b class="text-success">Actores: </b><?php echo $arrayData['actores'] ?><br>
          <b class="text-success">Director: </b><?php echo $arrayData['director'] ?><br>
          <b class="text-success">Guion: </b><?php echo $arrayData['guion'] ?><br>
          <b class="text-success">Produccion: </b><?php echo $arrayData['produccion'] ?><br>
          <b class="text-success">Año: </b><?php echo $arrayData['anio'] ?><br>
          <b class="text-success">Nacionalidad: </b><?php echo $arrayData['nacionalidad'] ?><br>
          <b class="text-success">Duracion: </b><?php echo $arrayData['duracion'] ?><br>
          <b class="text-success">Genero: </b><?php echo $arrayData['genero'] ?><br>
          <b class="text-success">Sinopsis: </b><?php echo $arrayData['sinopsis'] ?><br>
        </div>
        <div class="mb-3">
          <a href= "<?php dirname( __DIR__ ) .'/index.php'; ?>" class="btn btn-primary">Volver</a>    
        </div>
      </div>
    </div>
    </section>
  </body>
</html>