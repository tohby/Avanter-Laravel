 <?php $__env->startSection('content'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row" style="padding: 70px;">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-3">
				<br>
				<div class="card">
					<img class="card-img-top" src="/storage/product_image/<?php echo e($products->product_image); ?>" alt="Card image" style="width:100%">
				</div>
			</div>
			<div class="col-sm-3">
				<br>
				<h1><?php echo e($products->ProdName); ?></h1>
				<h3>$<?php echo e($products->Price); ?>.00</h3>
				<strong>Quick Overview</strong>
				<p><?php echo $products->Desc; ?></p>
				<a href="/pages/<?php echo e($products->id); ?>/create" class="float-right btn btn-outline-warning">Buy</a>
				<a href="/pages/" class="btn btn-outline-primary float-left">Go back</a>
			</div>
			<div class="col-sm-3">
			</div>
			<hr/>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>