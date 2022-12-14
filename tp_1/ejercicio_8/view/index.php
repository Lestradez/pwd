<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">TP 1 - Ejercicio 8</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form method="get" action="<?php dirname(__DIR__).'/controller/main.php' ?>" id="form-get">
        <div class="row">
          <div class="col-sm-6">  
            <div class="mb-3">
              <label for="edad" class="form-label">Edad: </label>
              <input
                type="number"
                class="form__input form-control"
                placeholder="Ingrese un número"
                autocomplete="off"
                name="edad"
                id="edad"
                required
              />
            </div>
          </div>  
          <div class="mb-3">
            <div class="form-check form-switch">
              <label class="form-check-label" for="estudiante">Es estudiante</label>
              <input class="form-check-input" type="checkbox" role="switch" id="estudiante" name="estudiante" value="on">            
            </div>
          </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar" />
        <input class="btn btn-primary" type="reset" value="Reset" />
      </form>
    </div>
  </div>
</div>
</section>
