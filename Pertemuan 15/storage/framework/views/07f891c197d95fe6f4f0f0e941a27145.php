
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title', 'Paket Kita'); ?></title>
        <link rel="icon" href="<?php echo e(asset('icon/logo_head.png')); ?>">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="<?php echo e(asset('css/trackpaket.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/akun.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/about.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/history.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(asset('js/trackpaket.js')); ?>"></script>
        <script src="<?php echo e(asset('js/listkurir.js')); ?>"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    </head>
    <body class=" default-flex">
    <!-- Navbar -->
    <nav class="navbar bg-white navbar-expand-lg p-3 border border-bottom sticky-top">
        <div class="container-fluid ms-3">
            <a class="ms-lg-5" href="<?php echo e(route('tracking')); ?>">
                <!-- Logo -->
                <div>
                    <img src="<?php echo e(asset('icon/logo2.1.png')); ?>" style="width: 140px;" alt="Logo PaketKita">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-md-0 mt-2 ms-lg-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('tracking') ? 'nav-active' : ''); ?>" href="<?php echo e(route('tracking')); ?>">Tracking Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('history') ? 'nav-active' : ''); ?>" href="<?php echo e(route('history')); ?>">Riwayat Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('about') ? 'nav-active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    
                    
                </ul>
<ul class="navbar-nav ms-lg-auto me-5">
    <?php if(auth()->guard()->check()): ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo e(Auth::user()->username); ?>

            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown">
                <!-- Logout -->
                <li>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </li>
            
                <!-- Ganti Password -->
                <li>
                    <a class="dropdown-item" href="<?php echo e(route('user.edit', Auth::id())); ?>">
                        <i class="bi bi-key me-2"></i> Edit Akun
                    </a>
                </li>
            
                <!-- Divider -->
                <li>
                    <hr class="dropdown-divider">
                </li>
            
                <!-- Hapus Akun -->
                <li>
                    <form action="<?php echo e(route('user.erase', Auth::id())); ?>" method="POST" class="m-0 p-0">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="dropdown-item text-danger bg-transparent hover-effect" onclick="return confirm('Yakin ingin menghapus akun mu?')">
                            <i class="bi bi-trash me-2"></i> Hapus Akun
                        </button>
                    </form>
                </li>
            </ul>

        </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->routeIs('login') ? 'nav-active' : ''); ?>" href="<?php echo e(route('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->routeIs('register') ? 'nav-active' : ''); ?>" href="<?php echo e(route('register')); ?>">Register</a>
        </li>
    <?php endif; ?>
</ul>

            </div>
        </div>
    </nav>
    
    <div class=" wrapper m-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

        <!-- Footer -->
        <footer class=" text-center py-4 bg-success text-white">
            <p class=" mt-4">©Copyright 2024 PaketKita - All Rights Reserved</p>
            <div class="container">
                <p class=" mt-3">Situs dan layanan ini tidak berafiliasi dengan ekspedisi manapun. Nama, logo, dan merek lain adalah hak milik dari masing-masing
                    pemiliknya. Kami tidak bertanggungjawab atas penyalahgunaan,
                   kerusakan, keterlambatan, kerugian materi dan non materi yang mungkin timbul akibat penggunaan layanan ini.
               </p>
            </div>
        </footer>
        <!-- Footer ^-->
    </body>
</html>
<?php /**PATH J:\VScode Project\Komputasi Wb\paketkita3\resources\views/layout/main_layout.blade.php ENDPATH**/ ?>