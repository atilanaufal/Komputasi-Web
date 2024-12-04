<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $__env->yieldContent('title', 'Aplikasi Laravel'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEBKU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('topmenu1')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('topmenu2')); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('topmenu3')); ?>">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3><?php echo $__env->yieldContent('title', 'Aplikasi Laravel'); ?></h3>
  <?php echo $__env->yieldContent('content'); ?>

</div>

</body>
</html>


<?php /**PATH J:\VScode Project\Komputasi Wb\pemrograman-web-a\resources\views/layoutp13/main.blade.php ENDPATH**/ ?>