<?php

class Usuario
{

    static public function registrarUsuario()
    {
        if (isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['correo']) && isset($_POST['clave'])) {

            if ($_POST['clave'] == $_POST['repita_clave']) {
                if (self::validarEntrada($_POST['nombre']) && self::validarEntrada($_POST['paterno']) && self::validarEntrada($_POST['materno'])) {
                    $datos = array(
                        "nombre" => $_POST['nombre'],
                        "paterno" => $_POST['paterno'],
                        "materno" => $_POST['materno'],
                    );

                    $id_persona = UsuarioModel::registrarPersona("persona", $datos);
                    if ($id_persona) {

                        $datos = array(
                            'id_usuario' => $id_persona,
                            "usuario" => $_POST['correo'],
                            "clave" => password_hash($_POST['clave'], PASSWORD_DEFAULT),
                            'rol' => 'USUARIO'
                        );

                        $respuesta = UsuarioModel::registrarUsuario("usuario", $datos);

                        if ($respuesta) {
                            $persona = UsuarioModel::obtenerPersona($id_persona);
                            self::iniciarSesion($persona);
                        }
                    }
                } else {
                    echo '<div class="alert alert-danger mt-2" role="alert">
                        No se permiten caracteres especiales
                    </div>';
                }
            } else {
                echo '<div class="alert alert-danger mt-2" role="alert">
                    Las contraseñas no coinciden
                </div>';
            }
        }
    }

    static private function validarEntrada($input)
    {
        return preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓ ]+$/', $input);
    }

    static private function iniciarSesion($persona)
    {
        $_SESSION['id'] = $persona['id_persona'];
        $_SESSION['nombre'] = $persona['nombre'];
        $_SESSION['paterno'] = $persona['paterno'];
        $_SESSION['materno'] = $persona['materno'];
        $_SESSION['rol'] = $persona['rol'];

        echo '<script>
                window.location = "' . $_ENV['BASE_URL'] . '";
            </script>';
    }
}
