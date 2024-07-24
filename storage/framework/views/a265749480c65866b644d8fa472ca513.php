<?php $__env->startSection('content'); ?>
    <h1 class="mb-4"><?php echo e($category->name); ?> Kategorisindeki Yerler</h1>

    <div class="row">
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e($place->photos->first()->path ?? 'https://via.placeholder.com/150'); ?>" class="card-img-top" alt="<?php echo e($place->name); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($place->name); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($place->description, 100)); ?></p>
                        <p class="card-text"><small class="text-muted">Beğeniler: <?php echo e($place->likes); ?></small></p>
                        <a href="<?php echo e(url('/places', $place->id)); ?>" class="btn btn-primary">Detayları Gör</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\Tourism\resources\views/categories/show.blade.php ENDPATH**/ ?>