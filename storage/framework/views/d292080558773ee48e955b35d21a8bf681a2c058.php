<link rel="stylesheet" href="<?php echo e(asset('backend//css/bootstrap.min.css')); ?>">

<section id="login" style="background-image: linear-gradient(to bottom right, #D4BA18, #C33E30);">
<div class="container py-5">
      <div class="class1 mx-auto d-flex align-items-center" style="height: 200px; width: 200px; clip-path: circle(50% at 50% 50%); background: white;">
        <h1 class="text-uppercase text-black text-center">User Login</h1>  
      </div>

       

   

        <?php if(session('status')): ?>
            <div class="mb-4 font-medium text-sm text-green-600">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <form class="row" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

          

            
            <div class="col-6 mx-auto">
          <div class="form-floating my-3">
            <input id="email"  type="email" name="email" :value="old('email')">
            <label for="email" value="<?php echo e(__('Email')); ?>">Email address</label>
          </div>
         
            
            
          <div class="form-floating my-3">
            <input id="password"  type="password" name="password" />
            
            <label for="password" value="<?php echo e(__('Password')); ?>">Password</label>
          </div>
          
            
            
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember_check" <?php echo $_COOKIE['remember_check']?? ''?>>
              <label class="form-check-label text-white" for="flexCheckDefault">
                Remember me
              </label>
          </div>
            
          <div class="d-flex justify-content-center">
               <button type="submit" class="btn btn-light" style="padding:10px 30px;" name="user_loggedin">Login</button>  
          </div>
            
            <h5 class="text-center mt-5"><a href="<?php echo e(route('register')); ?>" class="text-light">New user? Please sign up...</a></h5>
        </div>
        </form>
  
</div>
</section>
<?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/auth/login.blade.php ENDPATH**/ ?>