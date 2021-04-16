<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php')
    ?>
    <title>Iniciar Sesión</title>
</head>

<body class="hidden__overflow">
    <?php
    require_once('assets/layout/preloader.php')
    ?>
        <main class="main">
            <div>
                <div class="card-lr shadow-web">
                    <img class="img-fluid" src="assets/image/paw.svg" alt="Huella" srcset="">
                </div>
                <div class="card-clr">
                    <form action="assets/conection/login.php" method="get">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" name="email" required>
                                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="mb-3 mb-4">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="password" required>
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mx-auto">
                            <button class="btn btn-primary btn-lg" name="inicio">Iniciar sesión</button>
                            <a href="registro.php" class="mt-2 text-center">¿No tienes cuenta? Regístrate</a>
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