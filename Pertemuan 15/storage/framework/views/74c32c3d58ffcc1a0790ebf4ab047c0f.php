

<?php $__env->startSection('title', 'Login - PaketKita'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Login Page -->
    <div class="row justify-content-center mt-2 mb-5 align-items-center">
        <div class="col-12 col-md-6 col-lg-4">
               <!-- Success Snackbar -->
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
              <div class=" mb-4 text-center">
                <img src="<?php echo e(asset('icon/logo2.1.png')); ?>" style="width: 240px;" class="mx-auto" alt="Logo PaketKita">
                </div>
            <div class="card shadow-lg border-0 rounded-3 p-4">
                <!-- Title -->
                <h2 class="text-center mb-4">Login</h2>
                <!-- Login Form -->
                <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <!-- Input Username atau Email -->
                    <div class="mb-3">
                        <label for="usernameOrEmail" class="form-label fw-bold">Username atau Email</label>
                        <input 
                            type="email" 
                            class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            id="email" 
                            name="email" 
                            required 
                            placeholder="Masukkan email" 
                            value="<?php echo e(old('username') ?? old('email')); ?>"
                        >
                    </div>
                
                    <!-- Input Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input 
                            type="password" 
                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            id="password" 
                            name="password" 
                            required 
                            placeholder="Masukkan password"
                        >
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="<?php echo e(route('user.password')); ?>" class="custom-link">Lupa Password?</a>
                    </div>

                    <button type="submit" class="btn btn-custom w-100 mb-3">Login</button>

                    <div class="text-center">
                        <span class="text-muted">User Baru?</span>
                        <a href="<?php echo e(route('register')); ?>" class="custom-link ms-1">Register</a>
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

<?php echo $__env->make('layout.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\VScode Project\Komputasi Wb\paketkita3\resources\views/user/login.blade.php ENDPATH**/ ?>