
<?php $__env->startSection('admin'); ?>


   <div class="container">
      <!-- Main content -->
      
        <div class="row">
           <div class="col-3 ms-auto">
           <a class="btn btn-warning px-3 py-2 mt-5" href="<?php echo e(route('doctor.add')); ?>">Add Doctor</a> 
           </div>
        </div>
         <div class="row">
         <div class="col-9 ms-auto py-5">
             
             <table class="table table-secondary table-hover">
                <tr>
                   <th>SL</th>
                   <th>Department Name</th>
                   <th></th>
                </tr>
                <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td>
                      <?php echo e($key+1); ?>

                   </td>
                   <td><?php echo e($doctor['get_department_name']['name']); ?></td>
                   <td>
                   <a class="btn btn-danger px-3 py-2" href="<?php echo e(route('doctor.details',$doctor->department_id)); ?>">Doctor Details</a> 
                   </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
             </table>
           
          </div>
         </div>

         <?php $__env->stopSection(); ?>
      

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/hospital/doctor/doctor.blade.php ENDPATH**/ ?>