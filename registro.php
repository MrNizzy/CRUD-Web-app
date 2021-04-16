<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php')
    ?>
    <title>Iniciar Sesión</title>
</head>

<body>
    <?php
    require_once('assets/layout/preloader.php')
    ?>
    <main class="main">
        <div>
            <div class="card-lr shadow-web">
                <img class="img-fluid" src="assets/image/paw.svg" alt="Huella" srcset="">
            </div>
            <div class="card-clr">
                <form action="" method="">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" name="email">
                            <label for="exampleInputName1" class="form-label">Nombre</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="exampleInputApellido1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" name="email">
                            <label for="exampleInputApellido1" class="form-label">Apellido</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" name="email">
                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        </div>
                    </div>
                    <div class="mb-3 mb-4">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="password">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mx-auto">
                        <button class="btn btn-primary btn-lg" name="inicio">Registrar usuario</button>
                        <a href="index.php" class="mt-2 text-center">¿Ya tienes cuenta? Inicia sesión</a>
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