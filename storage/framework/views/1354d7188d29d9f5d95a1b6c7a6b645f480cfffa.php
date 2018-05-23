<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
	<div class=" container-fluid  ">
		<a class="navbar-brand" href="#pablo"> Dashboard </a>
		<button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-bar burger-lines"></span>
			<span class="navbar-toggler-bar burger-lines"></span>
			<span class="navbar-toggler-bar burger-lines"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navigation">
			<ul class="nav navbar-nav mr-auto">
				<li class="nav-item">
					<a href="#" class="nav-link" data-toggle="dropdown">
						<i class="fa fa-search" aria-hidden="true"></i>
						<span class="d-lg-none">Search</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<?php if(Auth::guest()): ?>
						<li class="nav-item">
							<a href="<?php echo e(route('login')); ?>" class="nav-link">Login</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo e(route('register')); ?>" class="nav-link">Register</a>
						</li>
						<?php else: ?>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo e(Auth::user()->name); ?>

							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								<a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
									<?php echo e(csrf_field()); ?>

								</form>
							</div>
						</li>
						<?php endif; ?>
					</ul>
				</div>
			</ul>
		</div>
	</div>
</nav>