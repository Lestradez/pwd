<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class="text-center">TP 1 - Ejercicio 3</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <h4>Formulario POST</h4>
      <form method="post" action="<?php dirname(__DIR__).'/controller/main.php' ?>" id="form-post">
        <div class="row mb-3">
          <div class="col">
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
          <div class="col">
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
        </div>
        <div class="row mb-3">
          <div class="col">
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
          <div class="col">
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
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
      </div>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <h4>Formulario GET</h4>
      <form method="get" action="<?php dirname(__DIR__).'/controller/main.php' ?>" id="form-get">
        <div class="row mb-3">
          <div class="col">
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
          <div class="col">
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
        </div>
        <div class="row mb-3">
          <div class="col">
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
          <div class="col">
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
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
      </div>
    </div>
  </div>
</section>
