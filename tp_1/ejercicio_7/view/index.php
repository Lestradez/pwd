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
  <div class="container p-3 col-sm-4">
    <div class="border bg-light border-3 rounded p-2 mt-3">
      <h3>Ejercicio 7</h3>
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
</body>
