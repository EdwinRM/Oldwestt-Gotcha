<?php

error_reporting(E_ALL ^ E_STRICT); //Para mostrar los errores de php en pantalla
ini_set('display_errors', 'On');

class conexionbd extends mysqli{

//    ------------------------------------------------------------
//    -------FUNCIONES PARA LA CONEXIÓN----
//    ------------------------------------------------------------
    
    private $_conexion;
    //Realiza la conexion al momento de requerirse la clase
    public function __construct() {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = "oldwestgotcha";
        $resultado=$this->_conexion = mysqli_connect($host, $user, $password, $database);        
        if ($resultado -> connect_errno){
                echo ("no se puede conectar con la base de datos");
            exit;
            }
            else{
               // echo("Conecto owó");
            }
        mysqli_select_db($this->_conexion, $database);    
        
    }
    //Hace la conexion a la bd
    public function conecc() {
        return $this->_conexion;
    }
   
 //    -----------------------------------------------------------
//    -------FUNCIONES MYSQLI-----------------------
//    ------------------------------------------------------------
    
    //Ejecuta una consulta
    public function query($sql) {
        $result = mysqli_query($this->_conexion,$sql);
        return $result;
    }
    //Comprobamos si se afectaron filas en la base de datos
    public function num_rows($sql) {
        return (mysqli_num_rows($sql) > 0); 
    }
    //Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL
    public function real_escape_string($datos){
        return mysqli_real_escape_string($this->_conexion, $datos);
    }
    //Cierra la conexión a la base de datos
    public function close(){
        mysqli_close($this->_conexion);
    }
}
 