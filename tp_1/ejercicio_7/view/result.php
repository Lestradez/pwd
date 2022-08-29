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
            <h2>Resultado del Ejercicio N°7:</h2>
            <div class="p-2 mb-3 bg-dark bg-gradient text-white">
                <?php         
                    echo '<p>La operación seleccionada es la  '.$arrayDatos['operacion'].', el primer número es el '.$arrayDatos['num1'].' y el segundo número es el '.$arrayDatos['num2'].'</p>';
                    echo '<p m-5>'.$arrayDatos['num1'].$arrayDatos['simbolo'].$arrayDatos['num2'].' = '.$arrayDatos['resultado'].'</p>';
                ?>
            </div>
            
            <div class="mb-3">
            <a href= "./index.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>