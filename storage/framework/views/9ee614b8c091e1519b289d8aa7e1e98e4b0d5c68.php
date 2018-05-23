<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title><?php echo e(config('app.name', 'Avanter')); ?></title>

	<!-- Styles -->
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.overlay {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100%;
			width: 100%;
			opacity: 0;
			transition: .5s ease;
			background-color: #fff;
		}

		.card:hover .overlay {
			opacity: 0.5;
		}
		/* Make the image fully responsive */

		.carousel-inner img {
			width: 100%;
			height: 100%;
		}

		.line1 {
			font-size: 60px;
			margin-bottom: -30px;
			letter-spacing: 0.5px;
		}

		.line2 {
			font-size: 60px;
			margin-top: 0px;
			letter-spacing: 0.5px;
		}
	</style>

</head>

<body>
	<div id="app">
		<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldContent('content'); ?> 
		
	</div>
	<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Scripts -->
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<!--ck editor -->
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'article-ckeditor' );
	</script>
</body>

</html>