<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col md:flex-row p-6 text-gray-900 dark:text-gray-100">
                <div class="w-full overflow-hidden rounded-lg shadow-xs mt-4 max-w-screen-xl px-4 mx-auto lg:px-12">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-center text-xs font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">SN</th>
                            <th class="px-4 py-3">Order Id</th>
                            <th class="px-4 py-3">Link</th>
                            <th class="px-4 py-3">File</th>
                            <th class="px-4 py-3">Bill</th>
                            <th class="px-4 py-3">ETA</th>
                            <th class="px-4 py-3">Copleted File</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Payment Status</th>
                            <th class="px-4 py-3">Manage</th>
                            </tr>
                        </thead>
                        <tbody class=" text-center bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php $__currentLoopData = $allOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><?php echo e($loop->iteration); ?></td>
                            
                            <td class="px-4 py-3 text-xs"><?php echo e($order->id); ?></td>
                            <td class="px-4 py-3 text-xs"><a href="<?php echo e($order->link); ?>" target="_blank" rel="noopener noreferrer"><?php echo e($order->link); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo e($order->file); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo e($order->bill); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo e($order->eta); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo e(isset($order -> complete_file) ? "Completed" : "Pending"); ?></td>
                            
                            <td class="px-4 py-3 text-sm"> <?php echo e($order->osInfo->os_name); ?> </td>
                            <td class="px-4 py-3 text-sm"> 
                                <?php echo e($order->psInfo->ps_name); ?>

                                <?php if($order->ps_status == '1'): ?> 
                                 <a href="#" type="button" class="text-gray-800 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800">Pay</a>
                                <?php endif; ?> 
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="<?php echo e(route('view.singleorder',[$order->id])); ?>" type="button" class="text-gray-800 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800">View</a>
                                <!-- <a href="#" type="button" class="text-gray-800 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-red-900">Delete</a> -->
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /home/devziaus/htdocs/zstudio/resources/views/frontend/clientOrder.blade.php ENDPATH**/ ?>