<div class="container-fluid d-none d-lg-block">
	<div class="header-top row">
		<div class="col-sm-4">
			Hi, welcome to
			<span style="color: #ffc23c"> &nbsp;Avanter&nbsp; </span>store!
		</div>
		<div class="col-sm-4 row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 row">
				<div class="col-sm-3">
					<i class="fa fa-twitter"></i>
				</div>
				<div class="col-sm-3">
					<i class="fa fa-facebook"></i>
				</div>
				<div class="col-sm-3">
					<i class="fa fa-pinterest-p"></i>
				</div>
				<div class="col-sm-3">
					<i class="fa fa-instagram"></i>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="col-sm-4 row float-left">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				Currency: USD
			</div>
			<div class="col-sm-4 float-left">
				Language: English
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo e(url('/pages/')); ?>">
			<?php echo e(config('app.name', 'Avanter')); ?>

		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<a href="<?php echo e(url('/carts/')); ?>">
					<i class="fa fa-shopping-cart" style="color:white" aria-hidden="true"> Cart</i><span class="label label-warning" style="color:white">5</span>
				</a>
			</ul>
		</div>

	</div>
</nav>