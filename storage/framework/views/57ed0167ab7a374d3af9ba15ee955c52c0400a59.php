 <?php $__env->startSection('content'); ?>
<div class="content">
	<div class="container-fluid">
		<h1>Update Products</h1>
		<?php echo Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST']); ?>

		<form>
			<div class="form-group">
				<?php echo e(Form::label('prodName', 'Product')); ?> <?php echo e(Form::text('prodName', $product->ProdName, ['class' => 'form-control', 'placeholder'
				=> 'Product Name'])); ?>


			</div>
			<div class="form-group">
				<?php echo e(Form::label('desc', 'Description')); ?> <?php echo e(Form::textarea('desc', $product->Desc, ['id' => 'article-ckeditor', 'class' => 'form-control',
				'placeholder' => 'Product Description'])); ?>

			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<?php echo e(Form::label('price', 'Price:')); ?> <?php echo e(Form::number('price', $product->Price, ['class' => 'form-control', 'placeholder' =>
						'Price'])); ?>


					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<?php echo e(Form::label('quantity', 'Quantity:')); ?> <?php echo e(Form::number('quantity', $product->Quantity, ['class' => 'form-control', 'placeholder'
						=> 'Quantity'])); ?>


					</div>
				</div>
			</div>
			<?php echo e(Form::hidden('_method', 'PUT')); ?> <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

		</form>
		<?php echo Form::close(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>