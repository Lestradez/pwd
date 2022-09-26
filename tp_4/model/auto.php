<?php
// CLASE AUTO

class Auto {
    // ATRIBUTOS 
    private string $patente;
    private string $marca;
    private int $modelo;
    private int $duenio; // clave foranea  obj Persona
    private string $mensaje; 

    public function __construct(){
        $this->patente="";
        $this->marca="";
        $this->modelo=0; 
        $this->duenio=0; 
        $this->mensaje="";

    }// fin function 

    /***** METODO SETEAR *****/
    public function setear($patente,$marca,$modelo,$duenio){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDuenio($duenio);

    }// fin function 


    /***** METODOS SET *****/
    public function setPatente($p){
        $this->patente=$p;

    }// fin function 

    public function setMarca($m){
        $this->marca=$m;

    }// fin function 

    public function setModelo($md){
        $this->modelo=$md;

    }// fin function 

    public function setMensaje($msj){
        $this->mensaje=$msj;

    }// fin function 

    public function setDuenio($duenio){
        $this->duenio=$duenio;
    }// fin function

    /***** METODOS GET *****/
    public function getPatente(){
        return $this->patente; 
    }// fin fucntion 

    public function getModelo(){
        return $this->modelo; 
    }// fin fucntion 

    public function getMarca(){
        return $this->marca; 
    }// fin fucntion 

    public function getMensaje(){
        return $this->mensaje; 
    }// fin fucntion 

    public function getDni(){
        return $this->duenio; 
    }// fin function 


    /** METODO SELECCIONAR  */
    /**
     * Selecciona los autos con un id dado 
     * @return boolean
     */
    public function cargar(){
        $salida=false; // return de la function 
        $objBase=new BaseDatos();
        // sentencia sql
        $sql="SELECT * FROM auto WHERE id=".$this->getPatente();
        if($objBase->Iniciar()){ // conexion con la BD
            $salida=$objBase->Ejecutar($sql);// devuelve la cantidad de registros afectados por el select
            if($salida>-1){
                if($salida>0){
                    $arrRegistro=$objBase->Registro();
                    $this->setear($arrRegistro['Patente'],$arrRegistro['Marca'],$arrRegistro['Modelo'],$arrRegistro['DniDuenio']);

                }// fin 

            }// fin if 

        }// fin if
        else{
            $this->setMensaje("Error en La tabla Auto: ".$objBase->getError());
        } // fin else 

        return $salida;

    }// fin function 


    /** METODO INSERTAR  */
    /**
     * Ingresa un registro a la tabla auto 
     * @return boolean 
     */
    public function insertar(){
        $salida=false; 
        $objBase=new BaseDatos();
        $sql="INSERT INTO auto(Patente,Marca,Modelo,DniDuenio) VALUES ('".$this->getPatente()."','".$this->getMarca()."','".$this->getModelo()."','".$this->getDni()."')";
        if($objBase->Iniciar()){
            if($objBase->Ejecutar($sql)){
                $salida=true;
            }// fin if 
            else{
                $this->setMensaje("Auto -> Insertar".$objBase->getError());

            }// fin else

        }//fin if 
        else{
            $this->setMensaje("Auto -> Insertar".$objBase->getError());

        }// fin else

        return $salida; 
        
    }// fin function

    /**
     * Funcion Modificar 
     * Actualiza uno de los campos de la tabla Auto
     * 
     * @return boolean
     */
    public function modificar(){
        $salida=false;
        $objBase=new BaseDatos();
        $sql="UPDATE auto SET Marca='".$this->getMarca()."' WHERE Patente='".$this->getPatente()."'";
        if($objBase->Iniciar()){
            if($objBase->Ejecutar($sql)){
                $salida=true; 

            }// fin if 
            else{
                $this->setMensaje("Tabla Modificar Auto: ".$objBase->getError());
            }// fin else 

        }// fin if 
        else{
            $this->setMensaje("Tabla Auto => ".$objBase->getError());

        }// fin else 

        return $salida; 



    }// fin function 

    /**
     * Funcion Eliminar Auto 
     * @return boolean
     */
    public function eliminar(){
        $salida=false;
        $objBase=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente='".$this->getPatente()."'";
        if($objBase->Iniciar()){
            if($objBase->Ejecutar($sql)){
                $salida=true;

            }// fin if 
            else{
                $this->setMensaje("Tabla auto-> eliminar".$objBase->getError());
            }// fin else

        }// fin if 
        else{
            $this->setMensaje("Tabla auto-> eliminar".$objBase->getError());

        }// fin else

        return $salida; 
    }// fin function 

    /** METODO ESTATICO LISTAR 
     * @param parametro string
     * @return array
     */
    public static function listar($parametro){
        $arrayDatos=array();
        $objBase= new BaseDatos();
        $sql="SELECT * FROM auto";
        if($parametro!=""){
            $sql.="WHERE ".$parametro;
        }// fin if 
        $res=$objBase->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while($row=$objBase->Registro()){
                    $newObjAuto=new Auto();
                    // antes de setear auto, creo un obj persona, ese obj persona llama al bsucar (dni)
                    // y luego seteo el dni de persona y lo ingreso al setear de auto
                    $objDuenio=new Persona(); // creo el objPersona
                    $objDuenio->setDni($row['DniDuenio']);  

                    $newObjAuto->setear($row['Patente'],$row['Marca'],$row['Modelo'],$objDuenio->getDni());
                    array_push($arrayDatos,$newObjAuto);

                }// fin while

            }// fin if 

        }// fin if 

        return $arrayDatos; 

    }// fin function
    
   



}// fin clase auto 



?>