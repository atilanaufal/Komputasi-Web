

<?php $__env->startSection('title', 'Paket Kita'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">

    <!-- Hasil Tracking -->
    <?php if(isset($trackingData)): ?>
       <div class="text-center">
            <img src="<?php echo e(asset('icon/' . strtolower($trackingData->courier) . '.png')); ?>" 
                 alt="<?php echo e($trackingData->courier); ?>" 
                 style="width: 130px;" 
                 class="align-self-center">
            <h1 class="text-success fw-bold mb-4"><?php echo e($trackingData->courier); ?></h1>
        </div>
        <br>
        <br>
        <span class="mt-5">
            <div>
                <div class="card-body">
                    <h3 class="text-success mb-3">Informasi Paket</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Resi:</strong> <?php echo e($trackingData->awb); ?></p>
                            <p><strong>Kurir:</strong> <?php echo e($trackingData->courier); ?></p>
                            <p><strong>Lokasi Asal:</strong> <?php echo e($trackingData->origin); ?></p>
                            <p><strong>Pengirim:</strong> <?php echo e($trackingData->shipper); ?></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Lokasi Tujuan:</strong> <?php echo e($trackingData->destination); ?></p>
                            <p><strong>Status:</strong> <?php echo e($trackingData->status); ?></p>
                            <p><strong>Penerima:</strong> <?php echo e($trackingData->receiver); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Progress Tracking -->
                <div class="progress-container mb-5 <?php echo e($trackingData->status === 'DELIVERED' ? 'step-3' : (count($history, true) >= 2 ? 'step-2' : 'step-1')); ?>">
                    <div class="progress-step completed">
                        <span>1</span>
                        <p class="mt-4">Dijemput Kurir</p>
                    </div>
                    <div class="progress-step <?php echo e(count($history) >= 2 ? 'completed' : ''); ?>">
                        <span>2</span>
                        <p class="mt-4">Sedang Diantar</p>
                    </div>
                    <div class="progress-step <?php echo e($trackingData->status === 'DELIVERED' ? 'completed' : ''); ?>">
                        <span>3</span>
                        <p class="mt-4">Pesanan Sampai</p>
                    </div>
                </div>

                <!-- History -->
                <h4 class="text-success mb-3">Riwayat Pelacakan</h4>
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            <td><?php echo e($item['date']); ?></td>
                            <td><?php echo e($item['description']); ?></td>
                            <td><?php echo e($item['location']); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <!-- Map Placeholder -->
                <h4 class="text-success mt-5 mb-3">Peta Lokasi</h4>
                <div id="map" class="bg-light border rounded-3" style="height: 400px; text-align: center; line-height: 400px;"
                    data-origin="<?php echo e($trackingData->origin); ?>"
                    data-destination="<?php echo e($trackingData->destination); ?>">
                    <span class="text-muted">Peta interaktif akan ditampilkan di sini</span>
                </div>
            </div>
        </span>
    <?php else: ?>
        <p class="text-center text-danger">Tidak ada data tracking ditemukan.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\VScode Project\Komputasi Wb\paketkita3\resources\views/main/track_view.blade.php ENDPATH**/ ?>