 <?php $__env->startSection('content'); ?>
<div class="content">
<div class="container-fluid">
	<h1>Create Products</h1>
	<?php echo Form::open(['action' => 'ProductsController@store', 'method' => 'Post', 'enctype' => 'multipart/form-data']); ?>

	<form>
		<div class="form-group">
			<?php echo e(Form::label('prodName', 'Product Name:')); ?> <?php echo e(Form::text('prodName', '', ['class' => 'form-control', 'placeholder' => 'Product	Name'])); ?>


		</div>
		<div class="form-group">
			<?php echo e(Form::label('desc', 'Description:')); ?> <?php echo e(Form::textarea('desc', '', ['id' => 'article-ckeditor', 'class' => 'form-control','placeholder' => 'Product Description'])); ?>

		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<?php echo e(Form::label('price', 'Price:')); ?> <?php echo e(Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])); ?>


				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<?php echo e(Form::label('quantity', 'Quantity:')); ?> <?php echo e(Form::number('quantity', '', ['class' => 'form-control', 'placeholder' => 'Quantity'])); ?>


				</div>
			</div>
		</div>
		<?php echo e(Form::file('product_image', ['class' => 'btn btn-dark'])); ?> <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary float-right'])); ?>

	</form>
	<?php echo Form::close(); ?>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>