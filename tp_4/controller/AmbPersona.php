<?php

class AmbPersona{

    /** MEODOS DE LA CLASE */
    /**
     * Espera un Array asociativo del obj de la tabla persona
     * @param array $datos
     * @return object
     */
    private function cargarObjeto($datos){
        $obj=null;
        if(array_key_exists('Nombre',$datos) && array_key_exists('Apellido',$datos) && array_key_exists('fechaNac',$datos) && array_key_exists('Telefono',$datos) && array_key_exists('Domicilio',$datos) && array_key_exists('NroDni',$datos)){
            $obj=new Persona();
            $obj->setear($datos['Nombre'],$datos['Apellido'],$datos['fechaNac'],$datos['Telefono'],$datos['Domicilio'],$datos['NroDni']);


        }// fin if
        return $obj; 
    }// fin function 

    /**
     * ESPERA UN ARRAY ASOCIATIVO DONDE LAS CLAVES SON LAS CAMPOS DE LA TABLA
     * @param array $datos
     * @return object
     */
    private function cargarObjetoConClave($datos){
        $obj=null;
        if(isset($datos['NroDni'])){
            $obj=new Persona();
            $obj->setear($datos['Nombre'],$datos['Apellido'],$datos['fechaNac'],$datos['Telefono'],$datos['Domicilio'],$datos['NroDni']);


        }// fin
        
        return $obj; 
    }// fin function 

    /**
     * Corrobora que dentro del array asociativo esten seteados los campos
     * @param array $datos
     * @return boolean
     */
    private function seteadosCamposClaves($datos){
        $resp=false;
        if(isset($datos['Nombre']) && isset($datos['Apellido']) && isset($datos['fechaNac']) && isset($datos['Telefono']) && isset($datos['Domicilio']) && isset($datos['NroDni'])){
            $resp=true; 
        }// fin if 

        return $resp; 
    }// fin function 

    /**
     * ALTA
     * @param array $datos
     * @return boolean
     */
    public function alta($datos){
        $resp=false;
        //$datos['DniDuenio']=null;
       // var_dump($datos); 
        $objPersona=$this->cargarObjeto($datos);
        if($objPersona!=null && $objPersona->insertar()){
            $resp=true;

        }// fin if 

        return $resp;
    }// fin function 

    /**
     * METODO BAJA PERSONA 
     * @param array $datos
     * @return boolean
     */
    public function baja($datos){
        $resp=false;
        if($this->seteadosCamposClaves($datos)){
            $objPersona=$this->cargarObjetoConClave($datos);
            if($objPersona!=null && $objPersona->eliminar()){
                $resp=true;

            }// fin if 

        }// fin if

        return $resp;

    }// fin function

    /**
     * METODO MODIFICAR PERSONA 
     * @param array $datos
     * @return boolean
     */
    public function modificacion($datos){
        $resp=false;
        if($this->seteadosCamposClaves($datos)){
            $objPersona=$this->cargarObjeto($datos);
            if($objPersona!=null && $objPersona->modificar()){
                $resp=true; 

            }// fin if 

        }// fin if 

        return $resp; 

    }// fin function 

     /**
     * METODO BUSCAR
     * @param array $param
     * @return array / 
     */
    public function buscar($param){
        $where=""; 
        $arreglo=array();
       // var_dump($param);
        if($param<>null){
            if(isset($param['NroDni'])){
                $where.="and NroDni=".$param['NroDni'];
            }// fin if
            if(isset($param['Apellido'])){
                $where.="and Apellido='".$param['Apellido']."'";

            }// fin if 
            if(isset($param['Nombre'])){
                $where.="and Nombre='".$param['Nombre']."'";

            }// fin if 
            if(isset($param['fechaNac'])){
                $where.="and fechaNac='".$param['fechaNac']."'";

            }// fin if 
            if(isset($param['Telefono'])){
                $where.="and Telefono='".$param['Telefono']."'";

            }// fin if 
            if(isset($param['Domicilio'])){
                $where.="and Domicilio='".$param['Domicilio']."'";
            }// fin if

        }// fin if
         
        $arreglo=Persona::listar($where);

        return $arreglo; 

    }// fin function 

    /**
     * METODO RECUPERAR PERSONA CON DNI DADO
     * @param int $dni
     * @return obj
     */
    public function personaConDni($dni){
        $objPersona=new Persona();
        $arrayPersona=$objPersona->personaConId($dni);
        return $arrayPersona; 
    }// fin function

}// fin clase 


?>