<?php

require_once 'config/config.php';


require_once "controladores/VistaPrincipal.php";
require_once "controladores/Pregunta.php";

require_once "modelos/PreguntaModel.php";

$vista = new VistaPrincipal();
$vista->cargarVista();