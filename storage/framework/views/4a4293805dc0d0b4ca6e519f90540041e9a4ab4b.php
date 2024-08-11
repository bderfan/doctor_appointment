
<?php $__env->startSection('admin'); ?>


   <div class="container">
      <!-- Main content -->
      
        
         <div class="row">
            <div class="col-9 ms-auto py-5">
             
               <table class="table table-secondary table-hover">
                  <tr>
                     <th>SL</th>
                     <th>Name</th>
                     <th>Phone</th>
                     <th>Fee</th>
                     <th></th>
                  </tr>
                  <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                     <td>
                        <?php echo e($key+1); ?>

                     </td>
                     <td><?php echo e(doctor->name); ?></td>
                     <td><?php echo e(doctor->phone); ?></td>
                     <td><?php echo e(doctor->fee); ?></td>
                     
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
               </table>
             
            </div>
         </div>

         <?php $__env->stopSection(); ?>
      

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/hospital/doctor.blade.php ENDPATH**/ ?>