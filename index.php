<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php')
    ?>
    <title>Iniciar Sesión</title>
</head>

<body class="scrollbar">
    <main class="main">
        <div>
            <div class="card-lr shadow-web">
                <img class="img-fluid" src="assets/image/paw.svg" alt="Huella" srcset="">
            </div>
            <div class="card-clr">
                <form action="">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com">
                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        </div>
                    </div>
                    <div class="mb-3 mb-4">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mx-auto">
                        <a href="panel.php" class="btn btn-primary btn-lg">Iniciar sesión<i class="bi bi-chevron-compact-right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>