<div class="container-fluid py-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white p-3">
                    <h4 class="text-center fw-bold mb-0">MANIPULACIÓN DE USUARIOS</h4>
                </div>
                <div class="card-body bg-white p-4">
                    <form id="FormUsuarios" class="needs-validation" novalidate>
                        <input type="hidden" id="usuario_id" name="usuario_id">
                        
                        <div class="row g-3">
                            <!-- Nombres -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" placeholder="Ingrese sus nombres" required>
                                    <label for="usuario_nombre">INGRESE SUS NOMBRES</label>
                                    <div class="invalid-feedback">Por favor ingrese sus nombres</div>
                                </div>
                            </div>
                            
                            <!-- Apellidos -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="usuario_apellido" name="usuario_apellido" placeholder="Ingrese sus apellidos" required>
                                    <label for="usuario_apellido">INGRESE SUS APELLIDOS</label>
                                    <div class="invalid-feedback">Por favor ingrese sus apellidos</div>
                                </div>
                            </div>
                            
                            <!-- NIT -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="usuario_nit" name="usuario_nit" placeholder="Ingrese su NIT" required>
                                    <label for="usuario_nit">INGRESE SU NIT</label>
                                    <div class="invalid-feedback">Por favor ingrese un NIT válido</div>
                                </div>
                            </div>
                            
                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="usuario_telefono" name="usuario_telefono" placeholder="Ingrese su teléfono" required>
                                    <label for="usuario_telefono">INGRESE SU TELÉFONO</label>
                                    <div class="invalid-feedback">Por favor ingrese un teléfono válido</div>
                                </div>
                            </div>
                            
                            <!-- Correo -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="usuario_correo" name="usuario_correo" placeholder="Ingrese su correo" required>
                                    <label for="usuario_correo">INGRESE SU CORREO</label>
                                    <div class="invalid-feedback">Por favor ingrese un correo válido</div>
                                </div>
                            </div>
                            
                            <!-- Estado -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="usuario_estado" name="usuario_estado" required>
                                        <option value="" selected disabled>Seleccione un estado</option>
                                        <option value="p">PRESENTE</option>
                                        <option value="f">FALTANDO</option>
                                        <option value="c">COMISIÓN</option>
                                    </select>
                                    <label for="usuario_estado">ESCOJA SU ESTADO</label>
                                    <div class="invalid-feedback">Por favor seleccione un estado</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Botones -->
                        <div class="d-flex gap-2 justify-content-center mt-4">
                            <button class="btn btn-success btn-lg px-4" type="submit" id="BtnGuardar">
                                <i class="bi bi-save me-2"></i>Guardar
                            </button>
                            
                            <button class="btn btn-primary btn-lg px-4 d-none" type="button" id="BtnModificar">
                                <i class="bi bi-pencil-square me-2"></i>Modificar
                            </button>
                            
                            <button class="btn btn-secondary btn-lg px-4" type="reset" id="BtnLimpiar">
                                <i class="bi bi-eraser me-2"></i>Limpiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= asset('build/js/usuarios/index.js') ?>"></script>