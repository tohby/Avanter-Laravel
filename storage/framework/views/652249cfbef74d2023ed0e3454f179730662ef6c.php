<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">Name</label>

                            <div class="col-lg-6">
                                <input
                                        type="text"
                                        class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                        name="name"
                                        value="<?php echo e(old('name')); ?>"
                                        required
                                >
                                <?php if($errors->has('name')): ?>
                                    <div class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

                            <div class="col-lg-6">
                                <input
                                        type="email"
                                        class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                        name="email"
                                        value="<?php echo e(old('email')); ?>"
                                        required
                                >

                                <?php if($errors->has('email')): ?>
                                    <div class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">Password</label>

                            <div class="col-lg-6">
                                <input
                                        type="password"
                                        class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                        name="password"
                                        required
                                >
                                <?php if($errors->has('password')): ?>
                                    <div class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">Confirm Password</label>

                            <div class="col-lg-6">
                                <input
                                        type="password"
                                        class="form-control<?php echo e($errors->has('password_confirmation') ? ' is-invalid' : ''); ?>"
                                        name="password_confirmation"
                                        required
                                >
                                <?php if($errors->has('password_confirmation')): ?>
                                    <div class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>