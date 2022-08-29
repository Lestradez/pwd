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
    <div  class="container-fluid ">
        <div class="container col-md-5" style="margin:30px;">
            <h2>Resultado del Ejercicio N°8:</h2>
            <div class="p-2 mb-3 bg-dark bg-gradient text-white">
                <?php         
                    echo '<p>El valor de la entrada es:  $'.$valorEntrada.'</p>';
                ?>
            </div>
            
            <div class="mb-3">
            <a href= "./index.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>