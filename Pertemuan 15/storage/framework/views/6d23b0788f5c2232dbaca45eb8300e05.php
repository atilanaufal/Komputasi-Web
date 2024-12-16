

<?php $__env->startSection('title', 'Register - PaketKita'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center mt-4 mb-5 align-items-center">
        <div class="col-12 col-md-6 col-lg-4">
            <?php if(session('success')): ?>
                <div class="container mt-3">
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="container mt-3">
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <?php echo e(session('error')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Logo -->
            <div class="mb-4 text-center">
                <img src="<?php echo e(asset('icon/logo2.1.png')); ?>" style="width: 240px;" alt="Logo PaketKita">
            </div>
            <div class="card shadow-lg border-0 rounded-3 p-4">
                <!-- Title -->
                <h2 class="text-center mb-4">Register</h2>
                <!-- Register Form -->
                <form action="<?php echo e(route('user.register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-bold">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Konfirmasi password">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email">
                    </div>

                    <button type="submit" class="btn btn-custom w-100 my-3">Register</button>

                    <div class="text-center">
                        <span class="text-muted">Sudah Punya Akun?</span>
                        <a href="<?php echo e(route('login')); ?>" class="custom-link ms-1">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const alert = document.querySelector('.alert');
    if (alert) {
        setTimeout(() => {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => {
                alert.remove(); // Menghapus elemen dari DOM
            }, 150); // Waktu tambahan untuk menyelesaikan animasi fade
        }, 3000); // Alert hilang otomatis setelah 3 detik
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\VScode Project\Komputasi Wb\paketkita3\resources\views/user/register.blade.php ENDPATH**/ ?>