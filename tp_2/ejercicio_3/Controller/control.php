<?php

if($_POST){
    // verificacion de datos
    include_once dirname(__DIR__).'/Model/modelo.php';// llama al modelo para hacer las verificaciones 
    $sonValidos=datosVerificados($_POST);

    // PREGUNTA SI EL USUARIO YA ESTA REGISTRADO
    $usuarioRegistrado=estaUsuario($_POST); // devuelve un boolean 
    
    // VERIFICACION DE CONTRASEÑA SEGURA
    $pwdSegura=vPwd($_POST);


    if($sonValidos){
        if($usuarioRegistrado){
            $pwdSegura=vPwd($_POST);
            if($pwdSegura){
                include_once dirname(__DIR__).'/View/resultado.php';

            }// fin if
            else{
                // mensaje de contraseña NO segura
                include_once dirname(__DIR__).'/View/mensaje.php';
            } // fin else


        }// fin if 
        else{
            // mensaje de usuario NO registrado
            include_once dirname(__DIR__).'View/mesajeUsuario.php'; 

        }// fin else 
        

    }// fin if 
    else{
        // mensaje de error algun dato vacios 
    }// fin else


    


     

}// fin if 
else{
    // mensaje de error

}// fin else 


?>