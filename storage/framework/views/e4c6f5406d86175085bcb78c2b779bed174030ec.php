<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title><?php echo e(config('app.name', 'Avanter')); ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
	/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/demo.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/light-bootstrap-dashboard.css?v=2.0.1')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
		body {
			font-family: 'Josefin Sans', sans-serif;
			!default
		}
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
	</style>
</head>

<body>
	<div class="wrapper">
		<?php echo $__env->make('inc.adminSidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="main-panel">
			<?php echo $__env->make('inc.adminNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldContent('content'); ?> <?php echo $__env->make('inc.adminFooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
	</div>
	<!--ck editor -->
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'article-ckeditor' );
	</script>
	<!--   Core JS Files   -->
	<script src="assets/css/core/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>