<?php
    error_reporting(E_ALL ^ E_STRICT);
    ini_set('display_errors', 'On');
    require_once 'Conexion.php';

    class funciones extends conexionbd {

//    ------------------------------------------------------------
//    -------FUNCIONES USUARIO -------------------
//    ------------------------------------------------------------

    public function verificar_usuario($datos) {
        $usuario_real = $this->real_escape_string($datos['usuario']);
        $pass_real = $this->real_escape_string($datos['pass']);
        $sha1_pass = sha1($pass_real);
        $sql = "SELECT id_usuario, usuario  FROM usuarios WHERE usuario = '$usuario_real' AND pass = '$sha1_pass' ";
        $result = $this->query($sql);
        $num_rows = $this->num_rows($result);
        if ($num_rows > 0) {
            $row = $result->fetch_assoc();
            mysqli_free_result($result);
            $_SESSION['id_usuario'] = $row['id_usuario'];
            header('Location: Administrador');
        } else {
            $this->close();
        }
    }

    public function get_usuario() {
        $sql = "SELECT usuario FROM usuarios WHERE id_usuario = '1' ";
        $resul = $this->query($sql);
        $row = mysqli_fetch_array($resul);
        return $row['usuario'];
    }

    public function update_usuario($datos) {
    
            $pass_real = utf8_decode($this->real_escape_string( trim($datos['pass'])));
            $passnew1_real = ($this->real_escape_string( trim($datos['passnew1'])));
            if ($passnew1_real != $datos['passnew1']){
                echo 'El password nuevo tiene caracteres no validos.';
            }else{
                $passnew2_real = $this->real_escape_string( trim($datos['passnew2']));
                $sha1_pass = utf8_decode(sha1($pass_real));
                $sql = "SELECT id_usuario, usuario  FROM usuarios WHERE id_usuario='1' AND pass = '$sha1_pass' ";
                $result = $this->query($sql);
                $num_rows = $this->num_rows($result);
                if ($num_rows > 0) {
                    if ( $passnew1_real != $passnew2_real) {
                        echo 'Las contraseñas nuevas no coinciden.';
                    } else{
                        echo 'Contraseña modificada.';
                        $sha1_passnew= utf8_decode(sha1($datos['passnew1']));
                        $sql= "UPDATE usuarios "
                                . " SET pass = '$sha1_passnew' "
                                . " WHERE id_usuario= '1' ";
                        $this->query($sql);
                    }
                } else {
                    echo 'Contraseña Incorrecta';                 
                }
            }        
    }
    
    public function recover_usuario(){
        $usuario = 'oldwestgotcha';
        $pass = sha1('oldwestgotcha');
        $sql = "UPDATE usuarios "
                . " SET usuario = '$usuario' , pass = '$pass' "
                . " WHERE id_usuario= '1' ";
        $this->query($sql);
        echo 'Usuario Recuperado.';
    }
 
//    ------------------------------------------------------------
//    -------FUNCIONES DATOS EMPRESA---------
//    ------------------------------------------------------------

    public function update_empresa($datos) {
        $correo = utf8_decode($datos['correo']);
        $facebook = utf8_decode($datos['facebook']);
        $instagram = utf8_decode($datos['instagram']);
        $youtube = utf8_decode($datos['youtube']);
        $horario = utf8_decode($datos['horario']);
        $telefono = utf8_decode($datos['telefono']);
        $sql = " UPDATE datos_empresa "
                . " SET  correo = '$correo' , facebook = '$facebook' , instagram  = '$instagram' , youtube = '$youtube' , horario = '$horario' ,  telefono = '$telefono' "
                . " WHERE id_empresa =  '1' ";
        $this->query($sql);
        echo 'Datos de la empresa actualizados.';
    }

    public function get_info_datos_empresa_by_campo($campo) {
        $sql = " SELECT  $campo "
                . " FROM datos_empresa "
                . " WHERE id_empresa= 1 ";
        $resul = $this->query($sql);
        $row = mysqli_fetch_array($resul);
        return $row[$campo];
    }

    public function get_datos_empresa() {
        $sql = "SELECT * "
                . " FROM datos_empresa "
                . " WHERE id_empresa = '1' ";
        $resul = $this->query($sql);
        $row = mysqli_fetch_array($resul);
        return $row;
    }

//    ------------------------------------------------------------
//    -------FUNCIONES HORARIOS------------------
//    ------------------------------------------------------------   

    public function update_horarios_by_id($datos) {
        $id_horario = $datos['id_horario'];
        $horario = utf8_decode($datos['horario']);
        $status_normal = $datos['status_normal'];
        $status_vacaciones = $datos['status_vacaciones'];
        
        $sql = " UPDATE horarios "
                . " SET horario = '$horario' , status_normal = '$status_normal' , status_vacaciones = '$status_vacaciones'  "
                . " WHERE id_horario = '$id_horario' ";
        $this->query($sql);
        echo 'Horario Actualizado';
    }

    public function get_all_horarios_normal() {
        $sql = "SELECT * FROM horarios WHERE status_normal = '1' ";
        $resul = $this->query($sql);
        return $resul;
    }

    public function get_all_horarios_vacaciones() {
        $sql = "SELECT * FROM horarios WHERE status_vacaciones  = '1' ";
        $resul = $this->query($sql);
        return $resul;
    }

    public function get_all_horarios(){
        $sql = "SELECT * FROM horarios";
        $resul = $this->query($sql);
        return $resul;
    }
    
    public function get_horario_by_id($id){
        $sql = " SELECT * FROM horarios WHERE id_horario = '$id' ";
        $resul = $this->query($sql);
        $row = mysqli_fetch_array($resul);
        return $row;
    }
//    ------------------------------------------------------------
//    -------FUNCIONES SERVICIOS------------------
//    ------------------------------------------------------------   

    public function get_info_servicios_by_id($id) {
        $sql = " SELECT  * FROM servicios  WHERE id_servicio= '$id' ";
        $resul = $this->query($sql);
        $row = mysqli_fetch_array($resul);
        return $row;
    }

    public function get_all_servicios(){
        $sql = " SELECT * FROM servicios";
        $resul = $this->query($sql);
    }
//    ------------------------------------------------------------
//    -------FUNCIONES PAQUETES------------------
//    ------------------------------------------------------------

    public function update_paquete_by_id($datos) {
        $id_paquete = utf8_decode($datos['id_paquete']);
        $columna1 = utf8_decode($datos['columna1']);
        $columna2 = utf8_decode($datos['columna2']);
        $sql = " UPDATE paquetes "
                . " SET columna1 = '$columna1' , columna2 = '$columna2' "
                . "  WHERE id_paquete= '$id_paquete' ";
        $this->query($sql);
    }

    public function get_all_paquetes_by_id_servicio($id) {
        $sql = "SELECT * FROM paquetes WHERE id_servicio = '$id' ";
        $resul = $this->query($sql);
        return $resul;
    }
    
    public function get_paquete_by_id_paquete($id_paquete){
        $sql = "SELECT * FROM paquetes WHERE id_paquete = '$id_paquete' ";
        $resul= $this->query($sql);
        $row = mysqli_fetch_array($resul);
        return $row;
    }
}
