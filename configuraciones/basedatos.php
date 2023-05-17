<?php

class BaseDatos {
    private $host;
    private $db;
    private $usuario;
    private $contrasena;
    private $caracteres;

    public function __construct(){
        $this->host= '192.168.1.12';
        $this->db= 'sifcon';
        $this->usuario= 'eguzman';
        $this->contrasena= 'Unicah123@';
        $this->caracteres= 'utf8';
    }
    function conectar(){
        try {
            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . "" . ";charset=" . $this->caracteres;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($conexion, $this->usuario, $this->contrasena, $opciones);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error de conexion: ' . $e->getMessage());
        }
    }
}
?>
