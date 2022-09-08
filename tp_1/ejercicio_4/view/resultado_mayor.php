
<section class="container justify-content-center align-items-center">
  <div class="row">
    <div class="container mt-4 mb-4 shadow p-3 mb-5 border bg-light border-3 rounded col-auto">
      <h4 class="alert-heading text-center mb-4 ">TP 1 - Ejercicio 4 - Mayores</h4> 
        <div class="alert alert-success " role="alert">   
          <div class="row">
            <div class="mb-3">
            <?php         
                    echo '<p class="lead">Hola, yo soy '.$arrayDatos['nombre'].', '.$arrayDatos['apellido'].' tengo '.$arrayDatos['edad'].' años y vivo en '.$arrayDatos['direccion'].'</p>';
                ?>
            </div>
            <div class="mb-3">
            <a href= "./index.php" class="btn btn-primary">Volver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>