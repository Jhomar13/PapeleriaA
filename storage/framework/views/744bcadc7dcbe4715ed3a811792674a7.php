<div class="py-12 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($modal): ?>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-gray-100 transition-all duration-300">

            

            <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-white">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 tracking-tight">
                        Nueva Compra
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Registra una compra y agrega los productos adquiridos.
                    </p>
                </div>
                <button wire:click="cerrarModal" class="text-gray-400 hover:text-red-500 transition-colors duration-200">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>


            
            <div class="p-8">
                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errorProveedor): ?>
                <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-700 font-medium">
                    <?php echo e($errorProveedor); ?>

                </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <div class="grid grid-cols-12 gap-y-8 gap-x-6">

                    
                    <div class="col-span-12 md:col-span-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Proveedor</label>
                        <select wire:model="idprov" class="w-full rounded-lg border-gray-300">
                            <option value="">Seleccione proveedor</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($p->idprov); ?>"><?php echo e($p->nombreprov); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['idprov'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Producto</label>
                        <select wire:model="idpro" class="w-full rounded-lg border-gray-300">
                            <option value="">Seleccione producto</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($pro->idpro); ?>"><?php echo e($pro->nombrepro); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['idpro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>



                    

                    <div class="col-span-12 md:col-span-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Costo total del paquete
                        </label>
                        <input
                            type="number"
                            step="0.0001"
                            min="0"
                            wire:model="costototal"
                            class="w-full rounded-lg border border-gray-400 bg-white
           focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['costototal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>


                    <div class=" col-span-12 md:col-span-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Cantidad</label>
                        <input
                            type="number"
                            min="1"
                            wire:model="cantidaddet"
                            class="w-full rounded-lg border border-gray-400 bg-white
           focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['cantidaddet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class=" col-span-12 md:col-span-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Margen (%)
                        </label>
                        <input
                            type="number"
                            min="0"
                            step="0.01"
                            wire:model="margen"
                            class="w-full rounded-lg border border-gray-400 bg-white
           focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['margen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-600 text-sm"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div class=" col-span-12">
                        <button wire:click="agregarDetalle"
                            class="px-6 py-2 rounded-lg bg-green-600 text-white font-medium hover:bg-green-700 transition">
                            + Agregar Producto
                        </button>
                    </div>

                    
                    <div class="col-span-12">
                        <div class="overflow-x-auto border rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Proveedor</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Producto</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Costo</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Cantidad</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Precio Unit.</th>
                                        <th class="px-6 py-3 text-left text-xs uppercase">Margen %</th>
                                        <th class="px-6 py-3 text-left text-xs uppercase">Precio Venta</th>
                                        <th class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase">Acción</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                                    <tr>
                                        <td class="px-6 py-4 text-sm"><?php echo e($d['proveedor']); ?></td>

                                        <td class="px-6 py-4 text-sm font-medium">
                                            <?php echo e($d['producto']); ?>

                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            $<?php echo e(number_format($d['costototalpaquete'], 4)); ?>

                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            <?php echo e($d['cantidaddet']); ?>

                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            $<?php echo e(number_format($d['preciounitario'], 2)); ?>

                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            <?php echo e($d['margenventa']); ?> %
                                        </td>

                                        <td class="px-6 py-4 text-sm font-semibold text-green-600">
                                            $<?php echo e(number_format($d['precioventa'], 2)); ?>

                                        </td>

                                        <td class="px-3 py-4 text-right">
                                            <button
                                                wire:click="eliminarDetalle(<?php echo e($index); ?>)"
                                                class="px-3 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700">
                                                X
                                            </button>
                                        </td>
                                    </tr>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                            No hay productos agregados
                                        </td>
                                    </tr>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                
                <div class="flex items-center justify-end gap-4 pt-8 mt-6 border-t border-gray-100">
                    <button wire:click="cerrarModal"
                        class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 bg-white hover:bg-gray-50">
                        Cancelar
                    </button>

                    <button wire:click="guardar"
                        style="background-color:#4f46e5; color:white;"
                        class="px-8 py-3 rounded-lg font-bold shadow-lg transition flex items-center gap-2 hover:opacity-90">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Guardar Compra</span>
                    </button>
                </div>

            </div>
        </div>

        
        <?php else: ?>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-4">
                    <img src="<?php echo e(asset('img/dinero.svg')); ?>"
                        alt="Compras"
                        class="w-14 h-14">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Compras</h2>
                        <p class="text-sm text-gray-500">Registro de compras a proveedores.</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <input
                        type="text"
                        wire:model.live="search"
                        placeholder="Buscar por código, proveedor o fecha"
                        class="border rounded px-3 py-2 w-80">
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->tienePermiso('compras.crear')): ?>
                    <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['wire:click' => 'abrirModal','variant' => 'primary','icon' => 'plus']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'abrirModal','variant' => 'primary','icon' => 'plus']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                        Nueva Compra
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>


            </div>

            <div class="overflow-x-auto border rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Código</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Proveedor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fecha</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <tr class="hover:bg-indigo-50/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-mono"><?php echo e($c->codigocom); ?></td>
                            <td class="px-6 py-4 text-sm font-bold"><?php echo e($c->proveedor->nombreprov); ?></td>
                            <td class="px-6 py-4 text-sm"><?php echo e($c->fechacom); ?></td>
                            <td class="px-6 py-4 text-sm">$<?php echo e(number_format($c->montototalcom, 2)); ?></td>
                            <td class="px-6 py-4 text-right">
                                <button
                                    wire:click="verDetalle(<?php echo e($c->idcom); ?>)"
                                    class="p-2 rounded-lg hover:bg-indigo-50 transition"
                                    title="Ver productos">

                                    <img
                                        src="<?php echo e(asset('img/Eye.svg')); ?>"
                                        alt="Ver productos"
                                        class="w-6 h-6">
                                </button>
                            </td>
                        </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </tbody>
                </table>

            </div>



        </div>
        <div class="mt-4">
            <?php echo e($compras->links()); ?>

        </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($modalDetalle): ?>
        <div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-xl w-full max-w-4xl">

                
                <div class="px-6 py-4 border-b flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold">Detalle de Compra</h3>
                        <p class="text-sm text-gray-500">
                            <?php echo e($codigoCompra); ?> — <?php echo e($proveedorCompra); ?>

                        </p>
                    </div>
                    <button wire:click="cerrarDetalle" class="text-gray-400 hover:text-red-500">
                        ✕
                    </button>
                </div>

                
                <div class="p-6 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs uppercase">Producto</th>
                                <th class="px-4 py-2 text-left text-xs uppercase">Cantidad</th>
                                <th class="px-4 py-2 text-left text-xs uppercase">Costo</th>
                                <th class="px-4 py-2 text-left text-xs uppercase">Precio Unit.</th>
                                <th class="px-4 py-2 text-left text-xs uppercase">Margen %</th>
                                <th class="px-4 py-2 text-left text-xs uppercase">Precio Venta</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $detalleCompra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <tr>
                                <td class="px-4 py-2">
                                    <?php echo e($d->producto->nombrepro); ?>

                                </td>
                                <td class="px-4 py-2">
                                    <?php echo e($d->cantidaddet); ?>

                                </td>
                                <td class="px-4 py-2 font-semibold">
                                    $<?php echo e(number_format($d->costototalpaquete, 2)); ?>

                                </td>
                                <td class="px-4 py-2">
                                    $<?php echo e(number_format($d->preciounitario, 2)); ?>

                                </td>
                                <?php
                                $precioVenta = $d->preciounitario + ($d->preciounitario * ($d->margenaplicadodet / 100));
                                ?>

                                <td class="px-4 py-2">
                                    <?php echo e(number_format($d->margenaplicadodet, 2)); ?> %
                                </td>

                                <td class="px-4 py-2 text-green-600 font-semibold">
                                    $<?php echo e(number_format($precioVenta, 2)); ?>

                                </td>
                                <!--<td class="px-4 py-2 text-green-600 font-semibold">
                                    $<?php echo e(number_format($d->producto->precioventapro, 2)); ?>

                                </td>-->
                            </tr>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($detalleCompra) === 0): ?>
                            <tr>
                                <td colspan="4" class="text-center py-4 text-gray-500">
                                    No hay productos en esta compra
                                </td>
                            </tr>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                </div>

                
                <div class="px-6 py-4 border-t flex justify-end">
                    <button
                        wire:click="cerrarDetalle"
                        class="px-6 py-2 rounded-lg border">
                        Cerrar
                    </button>
                </div>

            </div>
        </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>

</div><?php /**PATH /home/jpartesp/Desktop/EstaSI/PapeleriaARTES-main/resources/views/livewire/compras.blade.php ENDPATH**/ ?>