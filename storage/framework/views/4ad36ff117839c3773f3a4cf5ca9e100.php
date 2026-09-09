<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Agenda Rapat')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="<?php echo e(route('meetings.create')); ?>" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                        + Tambah Rapat Baru
                    </a>

                    <?php if(session('success')): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Sukses!</strong>
                            <span class="block sm:inline"><?php echo e(session('success')); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Rapat</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Link Absen</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Aksi</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e($meeting->title); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo e(\Carbon\Carbon::parse($meeting->meeting_date)->isoFormat('D MMMM YYYY')); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button onclick="copyToClipboard('<?php echo e(route('attendance.create', $meeting->slug)); ?>')" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded">
                                            Copy Link
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="<?php echo e(route('meetings.show', $meeting->id)); ?>" class="text-green-600 hover:text-green-900">Lihat Absen</a>
                                        <a href="<?php echo e(route('meetings.edit', $meeting->id)); ?>" class="text-indigo-600 hover:text-indigo-900 ml-4">Edit</a>
                                        <form action="<?php echo e(route('meetings.destroy', $meeting->id)); ?>" method="POST" class="inline-block ml-4">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" 
                                                    class="text-red-600 hover:text-red-900" 
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                                        Belum ada data rapat.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    
                    <div class="mt-4">
                        <?php echo e($meetings->links()); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Link absensi berhasil disalin!');
            }, function(err) {
                alert('Gagal menyalin link.');
            });
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\Xampp\htdocs\rapat\proyek-absensi\resources\views/admin/meetings/index.blade.php ENDPATH**/ ?>