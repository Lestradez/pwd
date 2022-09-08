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
    <link rel="stylesheet" href="../../includes/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

   
</head>
<!-- -->
<body>
     <!--ALINEA TODOS OS ITEMS A AL CENTRO-->
<div class="modal-dialog">
    <div class="d-flex justify-content w-75">
        <div class="modal-content text-center">
            <div class="modal-header text-center">
                <h1 class="display-6">Member Login</h1>   
            </div>

            <!-- FORMULARIO   USUARIO-->
            <form action="../Controller/control.php" name="form" method="post" was-validated onsubmit="return validar();">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="username"><i class="bi bi-person-fill"></i></span>
                    <input type="text" classs="form-control" placeholder="Username" name="usuario" id="usuario" required>
                    <div class="invalid-feedback" id="feedback-usuario"></div>
                </div>
                
                <!-- FORMULARIO   PASSWORD-->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="password"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" classs="form-control" placeholder="Password"  name="pwd" id="pwd" required>
                    <div class="invalid-feedback" id="feedback-pwd"></div>
                </div>


                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                </div>

            </form>
              

            </form>
        </div>    

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