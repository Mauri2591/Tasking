<?php
session_start();
class Conexion
{
    private $conexion;
    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=localhost;dbname=tasking", "root", "");
        } catch (\PDOException $e) {
            echo "Error en la conexion: " . $e->getMessage();
        }
    }
    protected function get_conexion()
    {
        return $conn = $this->conexion;
    }
}





// session_start();
// class Conexion
// {
//     private $conexion;
//     public function __construct()
//     {
//         try {
//             $this->conexion = new PDO("mysql:local=localhost;dbname=tasking", "tasking", "TaskUser*2024");
//         } catch (\PDOException $e) {
//             echo "Error en la conexion: " . $e->getMessage();
//         }
//     }
//     protected function get_conexion()
//     {
//         return $conn = $this->conexion;
//     }
// }