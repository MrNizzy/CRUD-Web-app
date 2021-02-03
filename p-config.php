<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php')
    ?>
    <title>Configuración de perfil</title>
</head>

<body>
    <?php
    require_once('assets/layout/navbar.php')
    ?>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header pt-4 px-5 roboto">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="panel.php" class="color-claro"><i class="fas fa-home"></i> Inicio</a></li>
                        <li class="breadcrumb-item color-claro" aria-current="page">Configuración de la cuenta</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <form action="" class="historial-cli container roboto">
        <div class="foto-perfil">
            <img src="assets/image/paw.svg" alt="Foto perfil" width="150px">
        </div> 
        <div class="mb-3 mt-5 form-floating">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de usuario" required>
            <label for="formGroupExampleInput" class="form-label">Nombre de usuario</label>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="form-floating">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Contraseña actual" required>
                    <label for="formGroupExampleInput2" class="form-label">Contraseña actual</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="password" class="form-control pl-5" id="nuevapassword" placeholder="Nueva contraseña" required>
                    <label for="nuevapassword" class="form-label">Nueva contraseña</label>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 mt-5">
            <button class="btn btn-primary btn-lg" type="submit">Guardar cambios</button>
        </div>
    </form>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>