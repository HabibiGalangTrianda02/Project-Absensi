<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Absensi Rapat</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; font-size: 12px; vertical-align: middle;}
        th { background-color: #f2f2f2; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h1 { margin: 0; font-size: 18px;}
        .header p { margin: 0; font-size: 14px; }
        .signature-img { width: 100px; height: auto; }
    </style>
</head>
<body>

    <div class="header">
        <h1>DAFTAR HADIR RAPAT</h1>
        <p><?php echo e(strtoupper($meeting->title)); ?></p>
        <p>TANGGAL: <?php echo e(\Carbon\Carbon::parse($meeting->meeting_date)->isoFormat('D MMMM YYYY')); ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No.</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jabatan/Unit</th>
                <th style="width: 20%;">Tanda Tangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $meeting->attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td style="text-align: center;"><?php echo e($index + 1); ?></td>
                    <td><?php echo e($attendance->name); ?></td>
                    <td><?php echo e($attendance->nik); ?></td>
                    <td><?php echo e($attendance->position); ?></td>
                    <td style="text-align: center;">
                        <?php if($attendance->signature): ?>
                            <img src="<?php echo e($attendance->signature); ?>" alt="Tanda Tangan" class="signature-img">
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada peserta yang mengisi absensi.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html><?php /**PATH D:\Xampp\htdocs\rapat\proyek-absensi\resources\views/pdf/attendance_report.blade.php ENDPATH**/ ?>