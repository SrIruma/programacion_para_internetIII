<?php
require_once 'config/conexion.php';

class EmpleadoController {
    
    public static function listar() {
       global $conexion;
        $stmt = $conexion->prepare("SELECT * FROM empleados");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function guardar($nombre, $puesto, $salario) {
        global $conexion;
        $stmt = $conexion->prepare("INSERT INTO empleados (nombre, puesto, salario) VALUES (:nombre, :puesto, :salario)");
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':puesto', $puesto, PDO::PARAM_STR);
        $stmt->bindParam(':salario', $salario, PDO::PARAM_STR);
        
       $stmt->execute();
        header("Location: index.php");
        exit;
    }

    

    

    
}
?>
