<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">TP 1 - Ejercicio 6</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form method="get" action="<?php dirname(__DIR__).'/controller/main.php' ?>" id="form-get">
      <div class="row mb-3">  
      <div class="col-6">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input
              type="text"
              class="form__input form-control"
              placeholder="Ingrese su nombre"
              autocomplete="off"
              name="nombre"
              id="nombre"
              required
            />
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido: </label>
            <input
              type="text"
              class="form__input form-control"
              placeholder="Ingrese su apellido"
              autocomplete="off"
              name="apellido"
              id="apellido"
              required
            />
          </div>
          <div class="mb-3">
            <label for="edad" class="form-label">Edad: </label>
            <input
              type="number"
              class="form__input form-control"
              placeholder="Ingrese su edad"
              autocomplete="off"
              name="edad"
              id="edad"
              required
            />
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label">Dirección: </label>
            <input
              type="text"
              class="form__input form-control"
              placeholder="Ingrese su dirección"
              autocomplete="off"
              name="direccion"
              id="direccion"
              required
            />
          </div>
        </div>
        <div class="col-sm-6">

    <fieldset class="row p-4 mb-3" >
      <legend class="col-form-label col-sm-5 pt-0 fw-bold text-end">Nivel de Estudios</legend>
      <div class="col-sm-7">
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="gridEstudios" id="gridEstudios" value="Sin Estudios" required>
          <label class="form-check-label" for="gridRadios1">
            Sin Estudios
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridEstudios" id="gridEstudios" value="Estudios Primarios"required>
          <label class="form-check-label" for="gridRadios2">
            Estudios Primarios
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridEstudios" id="gridEstudios" value="Estudios Secundarios" required>
          <label class="form-check-label" for="gridRadios3">
            Estudios Secundarios
          </label>
        </div>
      </div>
    </fieldset>

  <fieldset class="row p-4 mb-3">
    <legend class="col-form-label col-sm-5 pt-0 fw-bold text-end">Género</legend>
    <div class="col-sm-7">
      <div class="form-check ">
        <input class="form-check-input" type="radio" name="gridSexo" id="gridSexo" value="Masculino" required>
        <label class="form-check-label" for="gridRadios1">
          Masculino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridSexo" id="gridSexo" value="Femenino"required>
        <label class="form-check-label" for="gridRadios2">
          Femenino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridSexo" id="gridSexo" value="Otro" required>
        <label class="form-check-label" for="gridRadios3">
          Otro
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row p-4 mb-3">
    <legend class="col-form-label col-sm-5 pt-0 fw-bold text-end">Deportes que practica</legend>
    <div class="col-sm-7">
      <div class="form-check ">
        <input class="form-check-input" type="checkbox" name="gridDeporte[]" id="gridDeporte[]" value="Fútbol" >
        <label class="form-check-label" for="gridchecks1">
          Fútbol
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="gridDeporte[]" id="gridDeporte[]" value="Basquet">
        <label class="form-check-label" for="gridchecks1">
          Basquet
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="gridDeporte[]" id="gridDeporte[]" value="Tenis" >
        <label class="form-check-label" for="gridchecks1">
          Tennis
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="gridDeporte[]" id="gridDeporte[]" value="Voley" >
        <label class="form-check-label" for="gridchecks1">
          Voley
        </label>
      </div>
    </div>
  </fieldset>

        
        </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div>
</section>
