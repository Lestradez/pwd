
<section>
  <div  class="container-fluid">
    <div class="container mt-4 mb-4 shadow p-3 mb-5 bg-white rounded">
      <h4 class="alert-heading">¡Película registrada con éxito!</h4> 
      <div class="alert alert-success" role="alert">   
        <div class="row justify-content-center">       
          <div class="col-4 p-4 mb-1 h1">
            <img src="<?php echo $arrayData['url-image'] ?>" class=" img-thumbnail" alt="Responsive image">
          </div>      
          <div class="col-8 ps-3 p-4 ">
            <h4 class="alert-heading text-primary mb-3">Información</h4>
            <p class="mb-1"><b class="text-success">Título: </b><?php echo $arrayData['titulo'] ?></p>
            <p class="mb-1"><b class="text-success">Actores: </b><?php echo $arrayData['actores'] ?></p>
            <p class="mb-1"><b class="text-success">Director: </b><?php echo $arrayData['director'] ?></p>
            <p class="mb-1"><b class="text-success">Guión: </b><?php echo $arrayData['guion'] ?></p>
            <p class="mb-1"><b class="text-success">Producción: </b><?php echo $arrayData['produccion'] ?></p>
            <p class="mb-1"><b class="text-success">Año: </b><?php echo $arrayData['anio'] ?></p>
            <p class="mb-1"><b class="text-success">Nacionalidad: </b><?php echo $arrayData['nacionalidad'] ?></p>
            <p class="mb-1"><b class="text-success">Duración: </b><?php echo $arrayData['duracion'] ?></p>
            <p class="mb-1"><b class="text-success">Género: </b><?php echo $arrayData['genero'] ?></p>
            <p class="mb-1"><b class="text-success">Sinopsis: </b><?php echo $arrayData['sinopsis'] ?></p>
            <div class="mt-5">
              <a href= "<?php dirname( __DIR__ ) .'/index.php';?>" class="btn btn-primary">Volver</a>    
            </div>
          </div>
        </div>   
      </div> 
    </div>
  </div>
</section>
