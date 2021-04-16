<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php'); 
    session_start();
    ?>
    <title>Inicio</title>
</head>

<body>
    <?php
    require_once('assets/layout/preloader.php')
    ?>
    <div class="roboto">
        <?php
        require_once('assets/layout/navbar.php')
        ?>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header pt-4 px-5 roboto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item color-claro" aria-current="page"><i class="fas fa-home"></i> Inicio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card text-center">
            <div class="card-header">
                Introducción
            </div>
            <div class="card-body">
                <h5 class="card-title">Bienvenido/a al panel de control</h5>
                <p class="card-text">Acá podrás modificar, consultar y eliminar el historial clínico de las diferentes
                    mascotas.</p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, voluptate facere
                    assumenda tempore ad quia accusamus praesentium deserunt deleniti quam non labore voluptatum unde
                    magni similique. Soluta et laborum placeat! Fugiat labore nisi dolor voluptas voluptate, sit aliquid
                    libero quia quos laboriosam fuga? Delectus nam, possimus facere error et voluptatum ea hic
                    temporibus consequatur quod rerum expedita harum quia nemo.</p>
                <a href="assets/conection/registro.php" class="btn btn-primary">Consultar registros clínicos</a>
            </div>
            <div class="card-footer text-muted">
                Veterinaria
            </div>
        </div>
    </div>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>