<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        
        <div class="card mb-4">
            <div class="card-header">
                <h4><i class="bi bi-percent"></i> Configuración de IVA</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.configuraciones.iva')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <?php
                        $ivaPorcentaje = $configuraciones->where('clave', 'iva_porcentaje')->first()->valor ?? 12;
                    ?>

                    <div class="mb-3">
                        <label for="iva_porcentaje" class="form-label">Porcentaje de IVA *</label>
                        <div class="input-group">
                            <input type="number" step="0.01" class="form-control" id="iva_porcentaje" name="iva_porcentaje" value="<?php echo e($ivaPorcentaje); ?>" min="0" max="100" required>
                            <span class="input-group-text">%</span>
                        </div>
                        <small class="text-muted">Este porcentaje se aplicará a todas las ventas</small>
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-lg"></i> Guardar IVA
                    </button>
                </form>
            </div>
        </div>

        
        <div class="card mb-4">
            <div class="card-header">
                <h4><i class="bi bi-shield-lock"></i> Parámetros de Sesión y Bloqueo</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.configuraciones.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <?php
                        $sessionLifetime = $configuraciones->where('clave', 'session_lifetime')->first()->valor ?? 120;
                        $maxAttempts = $configuraciones->where('clave', 'max_login_attempts')->first()->valor ?? 5;
                    ?>

                    <div class="mb-3">
                        <label for="session_lifetime" class="form-label">Tiempo de Sesión (minutos) *</label>
                        <input type="number" class="form-control" id="session_lifetime" name="session_lifetime" value="<?php echo e($sessionLifetime); ?>" min="1" max="1440" required>
                        <small class="text-muted">Tiempo máximo de inactividad antes de cerrar sesión (1-1440 minutos)</small>
                    </div>

                    <div class="mb-3">
                        <label for="max_login_attempts" class="form-label">Intentos Máximos de Login *</label>
                        <input type="number" class="form-control" id="max_login_attempts" name="max_login_attempts" value="<?php echo e($maxAttempts); ?>" min="1" max="10" required>
                        <small class="text-muted">Número de intentos fallidos antes de bloquear la cuenta (1-10)</small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Guardar Configuración
                    </button>
                </form>
            </div>
        </div>

        
        <div class="card">
            <div class="card-header">
                <h4><i class="bi bi-database"></i> Respaldos del Sistema</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-file-earmark-code text-primary" style="font-size: 2.5rem;"></i>
                                <h5 class="mt-3">Backup Técnico</h5>
                                <p class="text-muted small">Archivo .SQL completo para restauración del sistema</p>
                                <a href="<?php echo e(route('admin.configuraciones.backup')); ?>" class="btn btn-primary">
                                    <i class="bi bi-download"></i> Descargar .SQL
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-file-earmark-excel text-success" style="font-size: 2.5rem;"></i>
                                <h5 class="mt-3">Exportar Datos</h5>
                                <p class="text-muted small">Excel con todos los datos del negocio</p>
                                <a href="<?php echo e(route('admin.configuraciones.exportar-datos')); ?>" class="btn btn-success">
                                    <i class="bi bi-download"></i> Descargar Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jpartesp/Desktop/EstaSI/PapeleriaARTES-main/resources/views/admin/configuraciones/index.blade.php ENDPATH**/ ?>