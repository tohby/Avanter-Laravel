 <?php $__env->startSection('content'); ?> <?php echo $__env->make('inc.carousel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container-fluid d-none d-lg-block">
	<div class="carouselFooter row">
		<div class="col-sm-3">
			<i class="fa fa-bicycle" aria-hidden="true"> FREE SHIPPING </i>
		</div>
		<div class="col-sm-3">
			<i class="fa fa-tags" aria-hidden="true"> WEEKLY DISCOUNTS</i>
		</div>
		<div class="col-sm-3">
			<i class="fa fa-refresh" aria-hidden="true"> FREE RETURN</i>
		</div>
		<div class="col-sm-3 float-right">
			<i class="fa fa-phone" aria-hidden="true"> 24/7 SUPPORT</i>
		</div>
	</div>
</div>
<br/>
<div class="container">
	<div class="row">
		<?php if(count($products) > 0): ?> <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-4">
			<a href="/pages/<?php echo e($product->id); ?>">
				<div class="card">
					<img class="card-img-top" src="/storage/product_image/<?php echo e($product->product_image); ?>" alt="Card image" style="width:100%">
					<div class="card-body">
						<h5><?php echo e($product->ProdName); ?></h5>
						<strong class="float-right"><?php echo e($product->Price); ?> USD</strong>
					</div>
				</div>
			</a>
		</div>
		<br/> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
		<br/> <?php echo e($products->links('vendor.pagination.bootstrap-4')); ?>

		<?php else: ?>
		<p> No Products in Catalog</p>
	</div>
	<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>