<!-- Modal crear procedimiento -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="" class="roboto">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Agregar nuevo procedimiento clínico.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="col-md">
                                <select class="form-select roboto color-claro p-3" aria-label="Asignar una mascota">
                                    <option selected>Asignar mascota</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="col-md">
                                <select class="form-select roboto color-claro p-3" aria-label="Asignar un veterinario">
                                    <option selected>Asignar veterinario</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escribe los medicamentos" id="floatingMedicamentos" maxlength="500"></textarea>
                                <label for="floatingMedicamentos">Listado de medicamentos.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escribe el procedimiento" id="floatingProcedimiento" maxlength="700"></textarea>
                                <label for="floatingProcedimiento">Procedimiento realizado.</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" onclick="SaveSuccess()" class="btn btn-outline-main" data-bs-dismiss="modal">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal crear dueño -->
<div class="modal fade" id="OwnerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="" class="roboto">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Agregar nuevo dueño.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formNombreInput" placeholder="Nombre del dueño" required>
                                <label for="formNombreInput" class="form-label">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formApellidoInput" placeholder="Apellido del dueño" required>
                                <label for="formApellidoInput" class="form-label">Apellido</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="mail" class="form-control" id="formGroupExampleInput" placeholder="Nombre de usuario" required>
                                <label for="formGroupExampleInput" class="form-label">Correo de contacto</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="formTelefonoInput" placeholder="Teléfono">
                                <label for="formTelefonoInput" class="form-label">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formCedulaInput" placeholder="Cédula" required>
                                <label for="formCedulaInput" class="form-label">Cédula</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formDireccionInput" placeholder="Dirección">
                                <label for="formDireccionInput" class="form-label">Dirección</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" onclick="SaveSuccess()" class="btn btn-outline-main" data-bs-dismiss="modal">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal crear mascota -->
<div class="modal fade" id="MascotaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="" class="roboto">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i> Agregar nueva mascota.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formNombreInput" placeholder="Nombre del dueño" required>
                                <label for="formNombreInput" class="form-label">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="formNacimientoInput" placeholder="Fecha nacimiento" required>
                                <label for="formNacimientoInput" class="form-label">Fecha nacimiento</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formTipoInput" placeholder="Tipo animal (ej. Gato)" required>
                                <label for="formTipoInput" class="form-label">Tipo animal (ej. Gato)</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formRazaInput" placeholder="Raza">
                                <label for="formRazaInput" class="form-label">Raza</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="formSangreInput" placeholder="Tipo de sangre" required>
                                <label for="formSangreInput" class="form-label">Tipo de sangre</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <select class="form-select roboto color-claro p-3" aria-label="Asignar un dueño">
                                <option selected>Asignar dueño</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" onclick="SaveSuccess()" class="btn btn-outline-main" data-bs-dismiss="modal">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>