<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php');
    session_start();
    if ($_SESSION['log'] == false) {
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
        <form action="">
            <div class="row mb-3">
                <div class="col-md d-flex gap-5 justify-content-evenly">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="formFInicialInput" placeholder="Fecha inicial" required name="fecha">
                        <label for="formFInicialInput" class="form-label">Fecha inicial</label>
                    </div>
                    <p class="align-self-center">Hasta</p>
                    <div class="form-floating">
                        <input type="date" class="form-control" id="formFFinalInput" placeholder="Fecha final" required name="fecha">
                        <label for="formFFinalInput" class="form-label">Fecha final</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Aplicar filtro por fechas</button>
                </div>
            </div>
        </form>

        <div class="table-responsive mt-3">
            <table class="table color-claro table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre paciente</th>
                        <th scope="col">Nombre dueño</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">null</th>
                        <td>null</td>
                        <td>null</td>
                        <td>null</td>
                        <td class="mx-auto" style="width: 200px;">
                            <button class="btn btn-outline-success mb-3" type="submit">Descargar reporte</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>