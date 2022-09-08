
  <section class="container justify-content-center align-items-center">
    <div class="row">
      <div " class="container p-3 col-auto">
        <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
          <h3>Ejercicio 2 </h3>
          <form id="formFile" name="formFile" class="mb-3" method="POST" action="<?php dirname( __DIR__ ) .'/controller/main.php'; ?>" enctype="multipart/form-data" >
            <div class="mb-3">
              <label for="formFile" class="form-label">Seleccione un archivo. Debe ser un archivo de texto plano (.txt)</label>
              <input class="form-control" type="file" id="formFile" name="formFile" accept=".txt" required>
            </div>
            <input class="btn btn-primary" type="submit" value="Enviar" />
          </form>
        </div>
      </div>
    </div>
  </section>
