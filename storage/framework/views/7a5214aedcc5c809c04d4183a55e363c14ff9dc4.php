
<link rel="stylesheet" href="<?php echo e(asset('backend//css/bootstrap.min.css')); ?>">

<section id="registration" style="background-image: linear-gradient(to bottom right, #D4BA18, #C33E30)">
    <div class="container py-5">
      <div class="class1 mx-auto d-flex align-items-center" style="height: 370px; width: 370px; clip-path: circle(50% at 50% 50%); background: white;">
        <h1 class="text-uppercase text-black text-center">Registration page</h1>  
      </div>

        <form class="row" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

           

          
            <div class="col-6 mx-auto">
          <div class="form-floating my-3">
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <label for="name" value="<?php echo e(__('Name')); ?>">Name</label>
          </div>
         
            
    
            
            
          <div class="form-floating my-3">
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <label for="email" value="<?php echo e(__('Email')); ?>">Email</label>
          </div>
        
            
            
          <div class="form-floating my-3">
            <input id="password" type="password" name="password" required autocomplete="new-password" />
            <label for="password" value="<?php echo e(__('Password')); ?>" >Password</label>
          </div>
          
            
            
          <div class="form-floating my-3">
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            <label for="password_confirmation" value="<?php echo e(__('Confirm Password')); ?>">Confirm Password</label>
          </div>
      
            
           
            
            
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-light" style="padding:10px 30px;" name="Registered">Registration</button>
          </div>
            
           <h5 class="text-center mt-5"><a href="<?php echo e(route('login')); ?>" class="text-light">Old user? Please log in...</a></h5>
        </div>
        </form>
</div>
</section>
 <?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/auth/register.blade.php ENDPATH**/ ?>