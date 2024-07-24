<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">
            <h1><?php echo e($place->name); ?></h1>
            <p><?php echo e($place->description); ?></p>
            <p>Beğeniler: <?php echo e($place->likes); ?></p>
            <img src="<?php echo e($place->photos->first()->path ?? 'https://via.placeholder.com/150'); ?>" class="img-fluid" alt="<?php echo e($place->name); ?>">
            <form action="<?php echo e(url('/places', $place->id)); ?>/like" method="POST" class="mt-3">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary">Beğen</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\Tourism\resources\views/places/show.blade.php ENDPATH**/ ?>