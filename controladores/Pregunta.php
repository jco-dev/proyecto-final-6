<?php

class Pregunta{

    static public function listarPreguntas($tabla, $columna, $valor)
    {
        $respuesta = PreguntaModel::listar($tabla, $columna, $valor);
        return $respuesta;
    }

}