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
    <div  class="container-fluid">
        <div class="container col-md-5" style="margin:30px;">
            <h2>Resultado del Ejercicio N°4 para Menores:</h2>
            <div class="p-2 mb-3 bg-info bg-gradient text-black">
                <?php         
                    echo '<p class="lead">Hola, yo soy '.$arrayDatos['nombre'].', '.$arrayDatos['apellido'].' tengo '.$arrayDatos['edad'].' años y vivo en '.$arrayDatos['direccion'].'</p>';
                ?>
            </div>
            
            <div class="mb-3">
            <a href= "./index.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>