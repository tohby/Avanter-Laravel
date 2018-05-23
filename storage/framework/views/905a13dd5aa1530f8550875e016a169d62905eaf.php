<?php $__env->startSection('content'); ?>
<div class="content">
<div class="container-fluid">
<h3>Products</h3>
<div class="container">
	<div class="row">
		<?php if(count($products) > 0): ?> <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4">
		<a href="/products/<?php echo e($product->id); ?>">
			<div class="card">
			<img class="card-img-top" src="/storage/product_image/<?php echo e($product->product_image); ?>" alt="Card image" style="width:100%">
				<div class="card-body">
				<h5><?php echo e($product->ProdName); ?></h5>
				<strong class="float-right"><?php echo e($product->Price); ?> USD</strong>
				</div>
			</div>
		</a>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php else: ?>
		<p> No Products in Catalog</p>
	</div>
</div>

<?php endif; ?> <?php echo e($products->links()); ?> 
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>