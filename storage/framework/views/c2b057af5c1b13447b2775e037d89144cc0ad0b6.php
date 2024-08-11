
<?php $__env->startSection('admin'); ?>



	  <div class="container">


       

		 <!-- Basic Forms -->
		  <div class="box" style="background-color: #262649;">
			<div class="box-header with-border">
			  <h3 class="box-title">Add Doctor</h3>
			  <a href="<?php echo e(route('doctor.view')); ?>" style="float:right;" class="btn btn-rounded btn-secondary mb-5">View Doctor</a>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
              <h5>Doctor<span class="text-danger">*</span></h5>
				<div class="col-6 mx-auto">
				<form method="post" action="<?php echo e(route('doctor.store')); ?>">
					<?php echo csrf_field(); ?>
					  <div class="row">
                
					  <div class="form-group py-2">
								      <h5 class="text-white">Department <span class="text-danger">*</span></h5>
								      <div class="controls">
									      <select name="department" id="department" required="" class="form-control bg-white">
										      <option value="">Select</option>
											  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											     <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
									      </select>
								      <div class="help-block"></div>
                                      </div>
							      </div>	
                     
                      <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="name" id="name" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-white" for="name" value="">Name</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                           <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="phone" id="phone" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-white" for="phone" value="">Phone No.</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                           <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="fee" id="fee" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-white" for="fee" value="">Fee</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                     
                     
					  </div>
						<div class="text-xs-center d-flex justify-content-center mt-5">
							<input type="submit" class="btn btn-rounded btn-secondary mb-5" value="Submit">
						</div>
					</form>

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
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/hospital/doctor/doctoradd.blade.php ENDPATH**/ ?>