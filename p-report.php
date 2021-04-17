<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php');
        session_start();
        if($_SESSION['log']==false){
            header("location: inicio.php");
        }
    ?>
    <title>Reporte clínico</title>
</head>

<body>
    <?php
    require_once('assets/layout/preloader.php')
    ?>

    <?php
    require_once('assets/layout/navbar.php')
    ?>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header pt-4 px-5 roboto">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="panel.php" class="color-claro"><i class="fas fa-home"></i> Inicio</a></li>
                        <li class="breadcrumb-item color-claro" aria-current="page">Reporte clínico</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container historial-cli roboto mb-5">
        <h3 class="card-title text-center mb-5">Reporte clínico de pacientes</h3>
        
    </div>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>