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

    <div class="container historial-cli roboto">
        <h3 class="card-title text-center mb-5">Historial clínico de pacientes</h3>
        <form class="d-flex gap-3">
            <div class="input-group mb-3">
                <span class="input-group-text color-claro" id="basic-addon1">Número de entradas</span>
                <select class="form-select" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="1">5</option>
                    <option value="2">10</option>
                    <option value="3">20</option>
                    <option value="4">Todas</option>
                </select>
            </div>
            <input class="form-control mb-3" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary mb-3" type="submit">Search</button>
        </form>
        <table class="table responsive color-claro">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
    require_once('assets/layout/scripts.php')
    ?>
</body>

</html>