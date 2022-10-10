
<?php $__env->startSection('container'); ?>
        <div class="container-fluid" style="margin-top:90px">
            <div class="row justify-content-end">
                <div class="col-md-4 ">
                    <div class="login-box">               
                        <!-- /.login-logo -->
                        <div class="card" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-body login-card-body">
                                <p class="login-logo">Silahkan Login</p>
                                <form action="<?php echo e(route('login')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-group mb-3">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username ...">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                    <div class="social-auth-links text-center mb-3">
                                        <input type="submit" value="Log In" href="#" class="btn btn-block btn-primary">
                               
                                    </div>
                                </form>
                                <!-- /.social-auth-links -->
                                <p class="mb-0">
                                    <a href="register.html" class="text-center">Belum punya akun ? Daftar </a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="text-center" style="color:gray">
                                    @semerusmartwaled2022
                                </p>
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- end of navbar -->
<?php $__env->stopSection(); ?>

   
<?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\semerusmart2\resources\views/login/index.blade.php ENDPATH**/ ?>