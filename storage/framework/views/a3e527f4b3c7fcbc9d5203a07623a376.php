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
            <tbody class=" text-center bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Order ID</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-xs"><?php echo e($order->id); ?></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Link</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-xs"><a href="<?php echo e($order->link); ?>" target="_blank" rel="noopener noreferrer"><?php echo e($order->link); ?></a></td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">File</td>
                    <td>:</td>
                  <td class="px-4 py-3 text-sm"><?php echo e($order->file); ?></td>
                </tr>

                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">File</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm"><?php echo e($order->bill); ?></td>
                </tr>

                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">File</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm"><?php echo e($order->eta); ?></td>
                </tr>

                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Order Status</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm"> <?php echo e($order->osInfo->os_name); ?> </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-xs">Payment Status</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm"> 
                        <?php echo e($order->psInfo->ps_name); ?>

                        <?php if($order->ps_status == '1'): ?>
                            <a href="#" type="button" class="text-gray-800 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800">Pay</a>
                        <?php endif; ?> 
                    </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-xs">Complete File</td>
                    <td>:</td>
                    <td class="px-4 py-3 text-sm">
                        <form class="w-full">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($order->id); ?>">
                            <textarea id="txtarea" rows="8" class="block  p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ><?php echo e($order -> complete_file); ?></textarea>
                            <div class=" flex flex-col md:flex-row items-center justify-center border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                                <button class="btn btn-cp text-gray-300 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800" data-clipboard-target="#txtarea">Copy to clipboard</button>
                                <button type="submit" formaction="<?php echo e(route('generate.pdf',[$order->id])); ?>" class="text-gray-300 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800">Download pdf</button>
                                <!-- <button href="<?php echo e(route('all.orders')); ?>" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-xs px-3 py-2 text-center mr-2 mb-2 dark:text-white dark:focus:ring-green-800">Download txt</button> -->
                        </div>
                        </form>
                        

                    </td>
                </tr>
          </tbody>
        </table>
        
          
          
      </div>
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
<?php endif; ?><?php /**PATH /home/devziaus/htdocs/zstudio/resources/views/frontend/clientSingleOrder.blade.php ENDPATH**/ ?>