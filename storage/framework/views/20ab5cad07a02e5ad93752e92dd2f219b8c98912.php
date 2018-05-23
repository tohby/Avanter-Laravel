 <?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<?php if(count($products) > 0): ?> <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4">
			<div class="card">
				<div class="card-body"><?php echo e($product->ProdName); ?></div>
			</div>
		</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php else: ?>
	</div>
</div>
<p> No Products in Catalog</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>