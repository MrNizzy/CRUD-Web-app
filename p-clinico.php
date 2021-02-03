<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once('assets/layout/head.php')
    ?>
    <title>Historial clínico</title>
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
                        <li class="breadcrumb-item color-claro" aria-current="page">Historial clínico</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container historial-cli roboto mb-5">
        <h3 class="card-title text-center mb-5">Historial clínico de pacientes</h3>
        <form class="d-flex gap-3">
            <div class="input-group mb-2">
                <span class="input-group-text color-claro" id="basic-addon1">Número de entradas</span>
                <select class="form-select" aria-label="Default select example" style="width: 100px;">
                    <option selected>-</option>
                    <option value="1">5</option>
                    <option value="2">10</option>
                    <option value="3">20</option>
                    <option value="4">Todas</option>
                </select>
            </div>
            <input class="form-control mb-2" type="search" placeholder="Buscar paciente" aria-label="Buscar">
            <button class="btn btn-primary mb-2" type="submit">Buscar</button>
        </form>
        <div class="table-responsive mt-3">
            <table class="table color-claro table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nombre paciente</th>
                        <th scope="col">Nombre dueño</th>
                        <th scope="col">Teléfono contacto</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Misifus</th>
                        <td>Mark Zucaritas</td>
                        <td>+57 31012345678</td>
                        <td class="mx-auto" style="width: 200px;">
                            <button class="btn btn-outline-main mb-3" type="submit">Modificar</button>
                            <button class="btn btn-outline-danger mb-3" type="submit">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Garfield</th>
                        <td>Jacob Smith</td>
                        <td>+57 3202556060</td>
                        <td>
                            <button class="btn btn-outline-main mb-3" type="submit">Modificar</button>
                            <button class="btn btn-outline-danger mb-3" type="submit">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Súper Can</th>
                        <td>Larry the Bird</td>
                        <td>+57 3163002020</td>
                        <td>
                        <button class="btn btn-outline-main mb-3" type="submit">Modificar</button>
                            <button class="btn btn-outline-danger mb-3" type="submit">Eliminar</button>
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