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
      <h3>Ejercicio 8</h3>
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
</body>
