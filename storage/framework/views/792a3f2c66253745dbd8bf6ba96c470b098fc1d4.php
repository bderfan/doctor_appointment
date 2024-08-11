
<?php $__env->startSection('admin'); ?>



	  <div class="container">


       

		 <!-- Basic Forms -->
		  <div class="box" style="background-color: #262649;">
			<div class="box-header with-border">
			  <h3 class="box-title">Details Doctor</h3>
			  <a href="<?php echo e(route('doctor.view')); ?>" style="float:right;" class="btn btn-rounded btn-secondary mb-5">View Doctor</a>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
              <h4 class="text-center text-white"><span class="text-warning">* </span>View Doctor</h4>
			  <h5 class="mt-5 text-center text-danger"><span class="font-weight-bold">Department:</span> <?php echo e($detailsdata['0']['get_department_name']['name']); ?></h5>
			  <div class="col-9 ms-auto py-5">
             
			 <table class="table table-secondary table-hover">
				<tr>
				   <th>SL</th>
				   <th>Name</th>
				   <th>Phone</th>
				   <th>Fee</th>
				   <th></th>
				</tr>
				<?php $__currentLoopData = $detailsdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
				   <td>
					  <?php echo e($key+1); ?>

				   </td>
				   <td><?php echo e($doctor['name']); ?></td>
				   <td><?php echo e($doctor['phone']); ?></td>
				   <td><?php echo e($doctor['fee']); ?></td>
				   <td>
				   <a class="btn btn-warning px-3 py-2" href="<?php echo e(route('doctor.edit',$doctor->id)); ?>">Edit Doctor</a> 
				   <a class="btn btn-danger px-3 py-2" href="<?php echo e(route('doctor.delete',$doctor->id)); ?>">Delete Doctor</a> 
				   </td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			 </table>
		   
		  </div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->


      </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/hospital/doctor/doctordetails.blade.php ENDPATH**/ ?>