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
    <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 ">
      <h3>Ejercicio 1</h3>
      <form id="formFile" name="formFile" class="mb-3" method="POST" action="<?php dirname( __DIR__ ) .'/controller/main.php'; ?>" enctype="multipart/form-data" >
        <div class="mb-3">
          <label for="formFile" class="form-label">Seleccione un archivo. Debe ser .doc o .pdf y su tamaño menor a 2mb</label>
          <input class="form-control" type="file" id="formFile" name="formFile" accept=".doc, .pdf" required>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</body>
