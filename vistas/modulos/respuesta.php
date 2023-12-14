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
                        <li class="breadcrumb-item">Respuesta</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity ">
                                    <!-- Post -->

                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="/vistas/dist/images/user.png" width="128px" alt="user image ">
                                            <span class="username">
                                                <a href="#">Erro 500 que significa</a>
                                                <p>Pedro Lopez</p>
                                            </span>
                                            <span class="description">Compartido públicamente -
                                                15/12/2021 </span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quas veritatis eum molestias assumenda cupiditate similique exercitationem? Ullam voluptatum nesciunt iusto quod iste, nulla, aliquam alias, id temporibus tenetur eligendi!
                                        </p>
                                        <img class="img-fluid pad" src="" alt="Photo">

                                    </div>
                                    <!-- /.post -->

                                    <!-- Respuestas -->


                                    <h3> 5 Respuestas</h3>
                                    <hr>
                                    <div class="post clearfix">
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere numquam ipsa, rerum, quo porro error eius quis itaque ea autem illum nihil aliquam suscipit accusantium? Incidunt vel fuga totam blanditiis.
                                        </p>

                                        <div class="border float-right ml-5 p-1  mb-2">
                                            <img class="img-fluid pad" src="" alt="respuesta">
                                        </div>

                                        <div class="row d-flex justify-content-end">
                                            <div class="col-md-6">
                                                <!-- <p class="float-left ml-2">
                                                            <a href="# " class="link-black text-primary">
                                                                <i class="fa fa-thumbs-up mr-1"></i> </a>
                                                            10 Like
                                                        </p> -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="vistas/dist/images/user.png" alt="User Image" />
                                                    <span class="username">
                                                        /<small class="text-sm text-muted">Respondido el 15/07/2022 por:</small>/
                                                        <p>Pablo Marmol</p>
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Tu respuesta</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="card-body">
                                                <h5>Escribe tu respuesta:</h5>
                                                <div class="form-group">
                                                    <input type="hidden" name="id_pregunta" id="id_pregunta" value="<?= $id_pregunta ?>">
                                                    <textarea name="descripcion_respuesta" id="descripcion_respuesta" class="form-control" rows="5" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn btn-default btn-file">
                                                        <i class="fas fa-paperclip"></i> Subir una captura de la respuesta
                                                        <input type="file" name="foto" id="foto" accept="image/png, image/jpg, image/jpeg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-primary"> Publicar tu respuesta</button>
                                                </div>
                                            </div>
                                            <!-- /.card-footer -->

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Otras Preguntas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">

                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        Preguntas de prueba
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>