<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <!-- Link clasico de CSS -->
    <link rel="stylesheet" href="login.css">
    <!--Link Boostrap 5 -->
    <link rel="stylesheet" href="/tp_2/includes/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

   
</head>
<!-- -->
<body>
    <!--ALINEA TODOS OS ITEMS A AL CENTRO-->
    <div class="d-flex justify-content-center p-3">
        <div class="card col-sm-6 p-3 bg-ligth w-25 aling-self-center">
            <!-- FORMULARIO USUARIO Y CONTRASEÑA-->
            <form class="form" action="../Controller/control.php" method="post" was validated onsubmit="return validar();">
                <div class="mb-3 text-center">
                    <h1 class="display-6">Member Login</h1>
                    
                </div>
                <div class="col-12 sm-12 mb-3">
                    
                    <div class="input-group-text">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="userName" placeholder="Usermane" required>
                        <!-- VALIDACION -->
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Ingrese un Nombre de Usuario</div>
                    </div>
                </div>
                <div class="col-12 sm-12 mb-3">
                    <!--NO ME FUNCIONA EL LOGO DE PASSWORD-->
                    <div class="input-group-text">
                        <span class="input-group-text"> <i class="fa-solid fa-lock"></i> </span>
                        <input type="password" class="form-control" id="pwd" placeholder="password" min="8" required>
                        <!--VALIDACION-->
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Ingrese una Contraseña</div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                </div>

            </form>
        </div>    

    </div> 


     <!--Link clasico de Js-->
     <script type="text/javascript" href="login.js"></script>

    <!--LINK CDN JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" 
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" 
    crossorigin="anonymous"></script>
</body>
</html>