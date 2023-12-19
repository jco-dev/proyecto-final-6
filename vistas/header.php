<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="/" class="navbar-brand">
            <span class="brand-text font-weight-light">Consultas PSG</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Perfil</a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">Usuarios</a>
                </li>
            </ul>

        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item dropdown"></li>

            <a href="login.html" class="btn btn-outline-primary btn-sm">
                Iniciar sesión
            </a>
            <a href="<?= $_ENV['BASE_URL'] ?>registro" class="btn btn-primary btn-sm ml-1">Regístrate</a>


            <div class="image">
                <img src="<?= $_ENV['BASE_URL'] ?>vistas/dist/images/user.png" class="img-circle" width="30" alt="Imagen de usuario">
            </div>
            <?= $_SESSION['nombre'] . ' ' . $_SESSION['paterno'] ?>
            <a href="salir" class="btn btn-outline-danger ml-1 btn-sm">
                salir
            </a>


        </ul>
    </div>
</nav>