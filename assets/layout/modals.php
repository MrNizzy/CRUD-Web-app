<?php
    //$path = getcwd();
?>
<!-- Modal crear procedimiento -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="assets/conection/procedimiento.php" method="get" class="roboto">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Agregar nuevo procedimiento clínico.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="col-md">
                                <select class="form-select roboto color-claro p-3" aria-label="Asignar una mascota" name="mascota">
                                    <option selected>Asignar mascota</option>
                                    <?php 
                                        include ("assets/conection/listasprocedimiento.php"); 
                                        echo $listaprocedimientos;
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escribe los medicamentos" id="floatingMedicamentos" maxlength="500" name="medicamentos"></textarea>
                                <label for="floatingMedicamentos">Listado de medicamentos.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escribe el procedimiento" id="floatingProcedimiento" maxlength="700" name="procedimientos"></textarea>
                                <label for="floatingProcedimiento">Procedimiento realizado.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button  class="btn btn-outline-main" name="save">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal crear dueño -->
<div class="modal fade" id="OwnerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="assets/conection/dueno.php" method="get" class="roboto">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Agregar nuevo dueño.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formNombreInput" placeholder="Nombre del dueño" required name="nombre">
                                <label for="formNombreInput" class="form-label">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formApellidoInput" placeholder="Apellido del dueño" required name="apellido">
                                <label for="formApellidoInput" class="form-label">Apellido</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="mail" class="form-control" id="formGroupExampleInput" placeholder="Email de usuario" required name="email">
                                <label for="formGroupExampleInput" class="form-label">Correo de contacto</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="formTelefonoInput" placeholder="Teléfono" name="telefono">
                                <label for="formTelefonoInput" class="form-label">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formCedulaInput" placeholder="Cédula" required name="cc">
                                <label for="formCedulaInput" class="form-label">Cédula</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formDireccionInput" placeholder="Dirección" name="direccion">
                                <label for="formDireccionInput" class="form-label">Dirección</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button  class="btn btn-outline-main" name="save">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal crear mascota -->
<div class="modal fade" id="MascotaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="assets/conection/mascota.php" method="get" class="roboto">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Agregar nueva mascota.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formNombreInput" placeholder="Nombre del dueño" required name="nombre">
                                <label for="formNombreInput" class="form-label">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="formNacimientoInput" placeholder="Fecha nacimiento" required name="fecha">
                                <label for="formNacimientoInput" class="form-label">Fecha nacimiento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formTipoInput" placeholder="Tipo animal (ej. Gato)" required name="tipo">
                                <label for="formTipoInput" class="form-label">Tipo animal (ej. Gato)</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formRazaInput" placeholder="Raza" name="raza">
                                <label for="formRazaInput" class="form-label">Raza</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formSangreInput" placeholder="Tipo de sangre" required name="sangre">
                                <label for="formSangreInput" class="form-label">Tipo de sangre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <select class="form-select roboto color-claro p-3" aria-label="Asignar un dueño" name="dueno">
                                <option selected>Asignar dueño</option>
                                    <?php 
                                        echo($listaduenos);
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button  class="btn btn-outline-main" name="save">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>