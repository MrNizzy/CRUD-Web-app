<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('assets/layout/head.php')
    ?>
    <title>Document</title>
</head>

<body>
    <div class="roboto">
        <?php
        require_once('assets/layout/navbar.php')
        ?>
    </div>

    <div class="container mt-5">
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
                <a href="p-clinico.php" class="btn btn-primary">Consultar registros clínicos</a>
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