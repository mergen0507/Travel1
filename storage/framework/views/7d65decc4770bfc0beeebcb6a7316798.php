<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Tourist Places</h1>

    <form method="GET" action="<?php echo e(route('places.index')); ?>">
        <div class="input-group mb-4">
            <input type="text" name="search" class="form-control" placeholder="Search for places..." value="<?php echo e(request('search')); ?>">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Categories</h2>
            <div class="list-group">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('categories.show', $category->id)); ?>" class="list-group-item list-group-item-action"><?php echo e($category->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e($place->photos->first()->path ?? 'https://via.placeholder.com/150'); ?>" class="card-img-top" alt="<?php echo e($place->name); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($place->name); ?></h5>
                        <p class="card-text"><?php echo e(Str::limit($place->description, 100)); ?></p>
                        <p class="card-text"><small class="text-muted">Likes: <?php echo e($place->likes); ?></small></p>
                        <a href="<?php echo e(url('/places', $place->id)); ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\Tourism\resources\views/places/index.blade.php ENDPATH**/ ?>