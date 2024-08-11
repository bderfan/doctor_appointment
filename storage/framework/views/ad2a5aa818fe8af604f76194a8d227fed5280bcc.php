
<?php $__env->startSection('admin'); ?>



	  <div class="container">


       

		 <!-- Basic Forms -->
		  <div class="box" style="background-color: #262649;">
			<div class="box-header with-border">
			  <h3 class="box-title">Add Department</h3>
			  <a href="<?php echo e(route('department.view')); ?>" style="float:right;" class="btn btn-rounded btn-secondary mb-5">View Department</a>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
              <h5>Doctor<span class="text-danger">*</span></h5>
				<div class="col-6 mx-auto">
					<form method="post" action="<?php echo e(route('department.store')); ?>">
					<?php echo csrf_field(); ?>
					  <div class="row">
                
                     
                      <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="name" id="name" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-white" for="name" value="">Name</label>
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
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/hospital/Department/departmentadd.blade.php ENDPATH**/ ?>