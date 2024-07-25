<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Tourism Website</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form action="<?php echo e(url('/logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="nav-link btn btn-link" type="submit">Logout</button>
                        </form>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/login')); ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
<main class="container mt-4">
    <?php echo $__env->yieldContent('content'); ?>
</main>
<footer class="footer bg-light text-center py-3 mt-4">
    <div class="container">
        <span>&copy; 2024 Tourism Website</span>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\Tourism\resources\views/layouts/app.blade.php ENDPATH**/ ?>