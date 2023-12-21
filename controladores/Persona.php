<?php

class Persona
{

    static public function listarUsuarios()
    {
        $respuesta = UsuarioModel::listarUsuarios();
        return $respuesta;
    }

}
