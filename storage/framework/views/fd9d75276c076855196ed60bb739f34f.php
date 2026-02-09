<div> 

    

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-sm text-gray-500">Total Gastado</p>
            <p class="text-2xl font-bold text-indigo-600">
                $<?php echo e(number_format($totalGastado, 2)); ?>

            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-sm text-gray-500">Total Compras</p>
            <p class="text-2xl font-bold">
                <?php echo e($totalCompras); ?>

            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow flex items-center justify-between">

            <div>
                <p class="text-sm text-gray-500">Performance</p>
                <p class="text-2xl font-bold text-green-600">
                    <?php echo e(number_format($performance, 2)); ?> %
                </p>
            </div>

            <a href="<?php echo e(route('reportes.index')); ?>"
                class="px-4 py-2 border rounded-lg text-sm font-semibold
              text-gray-600 hover:bg-red-50 hover:text-red-600
              transition">
                Salir
            </a>

        </div>
    </div>



    
    <div class="grid grid-cols-12 gap-6">

        
        <div class="col-span-12 lg:col-span-4 bg-white rounded-xl shadow">
            <div class="px-6 py-4 border-b">
                <h3 class="font-bold text-lg">Proveedores</h3>
            </div>

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs uppercase">Proveedor</th>
                        <th class="px-6 py-3 text-left text-xs uppercase">Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">
                            <?php echo e($p->proveedor); ?>

                        </td>
                        <td class="px-6 py-4 font-bold">
                            $<?php echo e(number_format($p->total_gastado, 2)); ?>

                        </td>
                    </tr>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </tbody>
            </table>
        </div>

        
        <div class="col-span-12 lg:col-span-8 bg-white rounded-xl shadow p-6">
            <h3 class="text-lg font-bold mb-4">Compras por proveedor</h3>

            <div wire:ignore class="h-[320px]">
                <canvas id="comprasPorProveedorChart"></canvas>
            </div>
        </div>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const proveedores = <?php echo json_encode(collect($proveedores) -> pluck('proveedor'), 15, 512) ?>;
            const totales = <?php echo json_encode(collect($proveedores) -> pluck('total_gastado'), 15, 512) ?>;

            const ctx = document
                .getElementById('comprasPorProveedorChart')
                .getContext('2d');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: proveedores,
                    datasets: [{
                        data: totales,
                        backgroundColor: [
                            '#3b82f6',
                            '#22c55e',
                            '#a855f7',
                            '#f97316',
                            '#ef4444'
                        ],
                        borderRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: value => '$' + value
                            }
                        }
                    }
                }
            });
        });
    </script>



</div><?php /**PATH /home/jpartesp/Desktop/EstaSI/PapeleriaARTES-main/resources/views/livewire/reporte-compras.blade.php ENDPATH**/ ?>