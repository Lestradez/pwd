/**
 * VERIFICA QUE LOS DATOS NO ESTEN VACIOS 
 * @return boolean
 */
 function validar(){
    var salida=true;  
    var name; 
    var password;

    name=document.getElementById("userName");
    password=document.getElementById("pwd");
    // VERIFICACION DE DATOS VACIOS 
    if(name=="" || password==""){
    salida=false;
    }// fin if 

    return salida; 

}// fin function

/**
 * Funcion pwdSafe => verifica si el password ingresado es seguro o no
 */
function pwdSafe(){
    var pwd; // string
    var longitud; // int
    var nLetras=0; // int
    var nNum=0; // int

    pwd=document.getElementById("pwd");
    longitud=pwd.length;

    for(i=0; i<longitud; i++){
        if(typeof(pwd.charAt(i)=="string")){
            nLetras++

        }// fin if 
        else{
            nNum++;

        }// fin else 

    }// fin for 

    // verificacion de clave segura
    if(longitud<8 || nLetras==0 || nNum==0){
        alert("Su clave NO es segura");

    }// fin if 

    
    

}// fin function 