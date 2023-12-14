<?php

require_once 'Conexion.php';

class PreguntaModel
{

    static public function listar($tabla, $columna, $valor)
    {

        if($columna == NULL){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna=:$columna");
            $stmt->bindParam(":". $columna, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }

    }
}
