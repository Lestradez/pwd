<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">TP 1 - Ejercicio 7</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form method="get" action="<?php dirname(__DIR__).'/controller/main.php' ?>" id="form-get">
        <div class="row">
          <div class="col-sm-6">  
            <div class="mb-3">
              <label for="edad" class="form-label">Primer Número: </label>
              <input
                type="number"
                class="form__input form-control"
                placeholder="Ingrese un número"
                autocomplete="off"
                name="num1"
                id="num1"
                required
              />
            </div>
          </div>  
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="direccion" class="form-label">Segundo Número: </label>
              <input
              type="number"
              class="form__input form-control"
              placeholder="Ingrese un número"
              autocomplete="off"
              name="num2"
              id="num2"
              required
              />
            </div>
          </div>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="operacion" id="operacion" required>
              <option value="">Seleccione la operación</option>
              <option value="suma">Suma</option>
              <option value="resta">Resta</option>
              <option value="multiplicación">Multiplicación</option>
              <option value="división">División</option>
            </select>
          </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div>
</section>
