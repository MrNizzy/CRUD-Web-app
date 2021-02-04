<nav class="navbar fixed-top roboto navbar-expand-md px-5 navbar-light bg-light text-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="assets/image/paw.svg" alt="Huella" srcset=""
                width="30" height="30"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="panel.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="p-clinico.php"><i class="fas fa-notes-medical"></i> Historial clínico</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-pen"></i> Registro
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                    class="fas fa-edit"></i> Crear registro</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <li class="navbar-nav nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
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

<div style="height: 3rem;">
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Crear registro clínico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="roboto">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Nombre de usuario" required>
                                <label for="formGroupExampleInput" class="form-label">Nombre del paciente</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="mail" class="form-control" id="formGroupExampleInput"
                                    placeholder="Nombre de usuario" required>
                                <label for="formGroupExampleInput" class="form-label">Correo de contacto</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Nombre de usuario" required>
                                <label for="formGroupExampleInput" class="form-label">Nombre del responsable</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Nombre de usuario" required>
                                <label for="formGroupExampleInput" class="form-label">Número de contacto</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="SaveSuccess()" class="btn btn-outline-main" data-bs-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>