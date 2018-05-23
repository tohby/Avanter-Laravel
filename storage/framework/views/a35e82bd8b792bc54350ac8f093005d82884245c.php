 <?php $__env->startSection('content'); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
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
				<small class="mr-auto">Created on, <?php echo e($products->created_at); ?></small>
				<br/>
				<a href="/products/<?php echo e($products->id); ?>/edit" class="float-right btn btn-outline-secondary"> Edit </a>
				<?php echo Form::open(['action' => ['ProductsController@destroy', $products->id], 'method' => 'POST', 'class' => 'float-left']); ?>

				<?php echo e(Form::hidden('_method', 'DELETE')); ?> <?php echo e(Form::submit('Delete', ['class' => 'btn btn-outline-danger'])); ?> <?php echo Form::close(); ?>

			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>