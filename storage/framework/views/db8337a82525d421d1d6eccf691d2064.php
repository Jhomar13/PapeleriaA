<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4>Crear Nuevo Rol</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.roles.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombrerol" class="form-label">Nombre del Rol *</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['nombrerol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nombrerol" name="nombrerol" value="<?php echo e(old('nombrerol')); ?>" required maxlength="30">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['nombrerol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="descripcionrol" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcionrol" name="descripcionrol" value="<?php echo e(old('descripcionrol')); ?>" maxlength="150">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5 class="mb-3">
                        <i class="bi bi-shield-check"></i> Permisos del Rol
                        <button type="button" class="btn btn-sm btn-outline-primary ms-2" onclick="seleccionarTodos()">Seleccionar todos</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary ms-1" onclick="deseleccionarTodos()">Deseleccionar todos</button>
                    </h5>

                    <div class="row">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $permisosAgrupados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo => $permisos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-light py-2">
                                    <strong>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php switch($modulo):
                                            case ('Dashboard'): ?> <i class="bi bi-speedometer2"></i> <?php break; ?>
                                            <?php case ('Productos'): ?> <i class="bi bi-box-seam"></i> <?php break; ?>
                                            <?php case ('Categorias'): ?> <i class="bi bi-tags"></i> <?php break; ?>
                                            <?php case ('Proveedores'): ?> <i class="bi bi-truck"></i> <?php break; ?>
                                            <?php case ('Ventas'): ?> <i class="bi bi-cart"></i> <?php break; ?>
                                            <?php case ('Usuarios'): ?> <i class="bi bi-people"></i> <?php break; ?>
                                            <?php case ('Roles'): ?> <i class="bi bi-person-badge"></i> <?php break; ?>
                                            <?php case ('Configuraciones'): ?> <i class="bi bi-gear"></i> <?php break; ?>
                                            <?php default: ?> <i class="bi bi-folder"></i>
                                        <?php endswitch; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php echo e($modulo); ?>

                                    </strong>
                                    <div class="form-check float-end">
                                        <input type="checkbox" class="form-check-input modulo-check" data-modulo="<?php echo e($modulo); ?>" onclick="toggleModulo('<?php echo e($modulo); ?>')">
                                    </div>
                                </div>
                                <div class="card-body py-2">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                                    <div class="form-check">
                                        <input class="form-check-input permiso-check permiso-<?php echo e($modulo); ?>" 
                                               type="checkbox" 
                                               name="permisos[]" 
                                               value="<?php echo e($permiso->idper); ?>" 
                                               id="permiso_<?php echo e($permiso->idper); ?>"
                                               <?php echo e(in_array($permiso->idper, old('permisos', [])) ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="permiso_<?php echo e($permiso->idper); ?>">
                                            <?php echo e($permiso->descripcionper); ?>

                                        </label>
                                    </div>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('admin.roles.index')); ?>" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-lg"></i> Guardar Rol
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function toggleModulo(modulo) {
    const checkboxModulo = document.querySelector(`[data-modulo="${modulo}"]`);
    const checkboxes = document.querySelectorAll(`.permiso-${modulo}`);
    checkboxes.forEach(cb => cb.checked = checkboxModulo.checked);
}

function seleccionarTodos() {
    document.querySelectorAll('.permiso-check, .modulo-check').forEach(cb => cb.checked = true);
}

function deseleccionarTodos() {
    document.querySelectorAll('.permiso-check, .modulo-check').forEach(cb => cb.checked = false);
}

// Actualizar checkbox de módulo cuando se cambian los permisos individuales
document.querySelectorAll('.permiso-check').forEach(cb => {
    cb.addEventListener('change', function() {
        const modulo = this.classList[2].replace('permiso-', '');
        const checkboxModulo = document.querySelector(`[data-modulo="${modulo}"]`);
        const checkboxesModulo = document.querySelectorAll(`.permiso-${modulo}`);
        const todosSeleccionados = Array.from(checkboxesModulo).every(c => c.checked);
        checkboxModulo.checked = todosSeleccionados;
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jpartesp/Desktop/EstaSI/PapeleriaARTES-main/resources/views/admin/roles/create.blade.php ENDPATH**/ ?>