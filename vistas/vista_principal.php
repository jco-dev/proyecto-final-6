<?php

$rutas = ['login', 'perfil', 'pregunta', 'preguntas', 'registro', 'respuesta'];

$ruta = $_GET['ruta'] ?? 'preguntas';

$clase = "";
if ($ruta == 'login' || $ruta == 'registro')
    $clase = "login-page";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Consultas | Posgrado</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css" />
    <!-- SCRIPTS    -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Boostrap v 4.6 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- adminlte 3.0.1 -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition layout-top-nav <?= $clase ?>">

    <?php
    if ($ruta != 'login' && $ruta != 'registro')
        include 'header.php';
    ?>

    <?php

    if (in_array($ruta, $rutas))
        include "modulos/$ruta.php";
    else
        include "modulos/404.php";

    ?>

    <?php
    if ($ruta != 'login' && $ruta != 'registro')
        include 'footer.php';
    ?>


</body>

</html>