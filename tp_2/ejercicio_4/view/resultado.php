
<section class="container justify-content-center align-items-center">
  <div class="row">
    <div  class="container-fluid col-auto">
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
</div>
    </section>