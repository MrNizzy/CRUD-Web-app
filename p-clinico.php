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
    <title>Historial clínico</title>
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
                        <li class="breadcrumb-item color-claro" aria-current="page">Historial clínico</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container historial-cli roboto mb-5">
        <h3 class="card-title text-center mb-5">Historial clínico de pacientes</h3>
        <form action="assets/conection/registro.ph" method="get">
            <div class="d-flex justify-content-around">
                <div class="d-flex gap-3 align-items-center">
                    <span class="color-claro" id="basic-addon1">Entradas </span>
                    <select class="form-select historial-cli__select" aria-label="Default select example">
                        <option selected>-</option>
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">20</option>
                        <option value="4">Todas</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Aplicar</button>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <input class="form-control" name="busqueda" type="search" placeholder="Buscar paciente" aria-label="Buscar">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
                
            </div>
        </form>
        <div class="table-responsive mt-3">
            <table class="table color-claro table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre paciente</th>
                        <th scope="col">Nombre dueño</th>
                        <th scope="col">Teléfono contacto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($_SESSION['pet']!=false){
                        echo($_SESSION['pet']);
                    }else{ ?><tr>
                                <th scope="row">null</th>
                                <td>null</td>
                                <td>null</td>
                                <td class="mx-auto" style="width: 200px;">
                            <button class="btn btn-outline-main mb-3" type="submit">Modificar</button>
                            <button class="btn btn-outline-danger mb-3" type="button" onclick="eliminar()">Eliminar</button><?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>