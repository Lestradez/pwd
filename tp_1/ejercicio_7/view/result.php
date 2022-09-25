
<section class="container justify-content-center align-items-center">
  <div class="row">
    <div class="container mt-4 mb-4 shadow p-3 mb-5 border bg-light border-3 rounded col-auto">
      <h4 class="alert-heading text-center mb-4 ">TP 1 - Ejercicio 7</h4> 
        <div class="alert alert-success " role="alert">   
          <div class="row">
            <div class="mb-3">
            <?php         
                    echo '<p>La operación seleccionada es la  '.$arrayDatos['operacion'].', el primer número es el '.$arrayDatos['num1'].' y el segundo número es el '.$arrayDatos['num2'].'</p>';
                    echo '<p m-5>'.$arrayDatos['num1'].$arrayDatos['simbolo'].$arrayDatos['num2'].' = '.$arrayDatos['resultado'].'</p>';
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