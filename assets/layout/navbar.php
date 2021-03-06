<nav class="navbar fixed-top roboto-nav navbar-expand-md px-5 navbar-light bg-light text-primary">
    <div class="container-fluid">
        <a class="navbar-brand" style="padding-left: 2rem;" href="panel.php"><img class="img-fluid" src="assets/image/paw.svg" alt="Huella" srcset="" width="35" height="35"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="panel.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/conection/registro.php"><i class="fas fa-notes-medical"></i> Historial clínico</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-pen"></i> Registro
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-cash-register"></i> Nuevo procedimiento clínico</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#MascotaModal"><i class="fas fa-paw"></i> Nueva mascota</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#OwnerModal"><i class="fas fa-user-check"></i> Nuevo dueño</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#FacturaModal"><i class="fas fa-calendar"></i> Nueva factura</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="p-report.php"><i class="fas fa-scroll"></i> Reporte clínico</a>
                </li>
            </ul>
            <div class="d-flex" style="padding-right: 2rem;">
                <li class="navbar-nav nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i> Administra tu cuenta
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="p-config.php"><i class="fas fa-tools"></i> Configuración</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php"><i class="fas fa-sign-out-alt"></i> Cerrar
                                sesión</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</nav>

<div style="height: 4rem;">
</div>

<?php
    require_once('modals.php')
?>