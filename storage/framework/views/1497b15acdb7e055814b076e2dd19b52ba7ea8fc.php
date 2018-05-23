<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="container-fluid">
	<h1>Products</h1>
	<h1><?php echo e($products->ProdName); ?></h1>
	<p><?php echo $products->Desc; ?></p>
	<hr/>
	<small class="mr-auto">Written on, <?php echo e($products->created_at); ?></small>
	<a href="/products/<?php echo e($products->id); ?>/edit" class="float-right btn btn-outline-secondary"> Edit </a>
	<?php echo Form::open(['action' => ['AdminController@destroy', $products->id], 'method' => 'POST', 'class' => 'float-right']); ?> <?php echo e(Form::hidden('_method',
	'DELETE')); ?> <?php echo e(Form::submit('Delete', ['class' => 'btn btn-outline-danger'])); ?> <?php echo Form::close(); ?>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>