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
  <div class="container p-3">
    <div class="border bg-light border-3 rounded p-2 mt-3">
      <h3>Ejercicio 4</h3>
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
</body>
