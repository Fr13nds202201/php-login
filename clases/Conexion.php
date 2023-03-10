<?php
class Conexion {
    public $servidor ='localhost';
    public $usuario ='root';
    public $password ='';
    public $database ='loginpoo';

    public function conectar(){
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database
        );
    }
}
?>