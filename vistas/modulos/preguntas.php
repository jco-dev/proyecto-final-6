<?php
    $preguntas = Pregunta::listarPreguntas('pregunta', NULL, NULL);
    var_dump($preguntas);
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Inicio <small></small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item">Preguntas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity ">

                                    <div class="post clearfix">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="vistas/dist/images/user.png" alt="Imagen de usuario">
                                            <span class="username">
                                                <a href="respuesta.html">titulo</a>
                                                <p>Nombre Usuario</p>
                                            </span>
                                            <span class="description">Compartido públicamente - 15/09/2022</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto dolorum totam molestias necessitatibus cupiditate tempora, labore mollitia id deserunt inventore placeat saepe. Vel ipsum consequuntur esse ratione accusantium molestiae.
                                        </p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">

                            <a class="btn btn-primary btn-block" href="pregunta.html">
                                Preguntar
                            </a>


                            <a class="btn btn-primary btn-block" href="login.html">
                                Regístrese o inicie sesión para preguntar
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>