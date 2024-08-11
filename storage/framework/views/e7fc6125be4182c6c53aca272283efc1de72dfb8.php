
<?php $__env->startSection('admin'); ?>


<?php
  $user = DB::table('users')->where('id',Auth::User()->id)->first();
?>
<div class="container">
  <div class="row">
  <div class="col-12 mx-auto px-md-4" style="background: rgb(255,0,0); background: linear-gradient(304deg, rgba(255,0,0,1) 16%, rgba(254,255,0,1) 100%);">
      <div class="pt-3 pb-2 mb-3 border-bottom">
          <h5 class="text-dark text-center fw-bold fs-1">My Hospital</h5>
          <div class="d-flex justify-content-end my-3">
                <!-- Button trigger modal -->
                 <a href="../index.php" class="btn btn-light">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                     </svg>
                 </a>
           </div>
      </div>
      <div>
           <div class="d-flex justify-content-center mt-3">
               <a class="btn btn-light" style="padding:10px 30px;" href="<?php echo e(route('admin.logout')); ?>">Logout</a>
           </div>
      </div>    
        <canvas width="900" height="380"></canvas>
</div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/admin/index.blade.php ENDPATH**/ ?>