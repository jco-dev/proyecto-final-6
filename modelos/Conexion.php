<?php

class Conexion
{
    static public function conectar()
    {
        $conexion = new PDO("mysql:host=localhost;dbname=proyecto", "root", "");
        return $conexion;
    }
}