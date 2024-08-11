
<?php $__env->startSection('admin'); ?>






   <div class="container">
      <!-- Main content -->
      
      <div class="row">
        <div class="col-9 ms-auto">
        <div class="row">
        <div class="col-6 py-5">
        <form class="bg-white" method="post" action="<?php echo e(route('appointment.store')); ?>">
					<?php echo csrf_field(); ?>
					  <div class="row">
                
                      <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="date" name="date" id="date" class="form-control bg-white" required="" data-validation-required-message="This field is required"> 
                                        <label class="text-white" for="date" value="">Appointment Date</label>
                                        <div class="help-block"></div>
                                    </div>
						   </div>

                           <div class="form-group py-2">
								      <h5 class="text-dark">Select Department</h5>
								      <div class="controls">
									      <select name="department" id="department" required="" class="form-control bg-white">
										      <option value="">Select</option>
                                    <?php $__currentLoopData = $deptdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											     <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
									      </select>
								      <div class="help-block"></div>
                                      </div>
							      </div>	

                                  <div class="form-group py-2">
								      <h5 class="text-dark">Select Doctor</h5>
								      <div class="controls">
									      <select name="doctor" id="doctor" class="form-control bg-white">
                                    <option value="">Doctor</option>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											     <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->name); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
									      </select>
								      <div class="help-block"></div>
                                      </div>
							      </div>	
                     
                    
                          
                           <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="fee" id="fee" class="fee form-control bg-white text-dark" required="" data-validation-required-message="This field is required" placeholder="Fee"> 
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                     
                     
					  </div>
						<div class="text-xs-center d-flex justify-content-start mt-5">
							<input type="submit" class="btn btn-rounded btn-success mb-5" value="Add">
						</div>
					</form>
        </div>
         <div class="col-6 py-5">
             
             <table class="table table-secondary table-hover">
                <tr>
                   <th>SL</th>
                   <th>App. Date</th>
                   <th>Doctor</th>
                   <th>Fee</th>
                   <th>Action</th>
                </tr>
                <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                   <td>
                      <?php echo e($key+1); ?>

                   </td>
                   <td><?php echo e($doctor->appointment_date); ?></td>
                   <td><?php echo e($doctor['get_doctor_name']['name']); ?></td>
                   <td><?php echo e($doctor->total_fee); ?></td>
                   <td>
                   <a class="btn btn-danger px-3 py-2" href="<?php echo e(route('appointment.delete',$doctor->id)); ?>">Delete Doctor</a> 
                   </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
             </table>

             <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <form class="mt-5 py-2 bg-white" method="post" action="<?php echo e(route('appointment.keep')); ?>">
					<?php echo csrf_field(); ?>
					  <div class="row">
                 <div class="col-6">
                  <h6 class="text-dark">Patient Information</h6>
                  <input type="hidden" name="hidden_dr_id" value="<?php echo e($patient->doctor_id); ?>">
                 <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="name" id="name" class="form-control bg-white" required="" data-validation-required-message="This field is required" placeholder="Patient Name"> 
                                       <div class="help-block"></div>
                                    </div>
						   </div>

                 <h6 class="text-dark">Payment</h6>
                 <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="fee" id="fee" class="form-control bg-white" required="" data-validation-required-message="This field is required" placeholder="Total Fee" value="<?php echo e($patient->total_fee); ?>"> 
                                        <div class="help-block"></div>
                                    </div>
						   </div>
                 </div>

                 <div class="col-6">

                 <div class="form-group py-4">
								    
								    <div class="controls mt-3">
									    <input type="text" name="phone" id="phone" class="form-control bg-white" required="" data-validation-required-message="This field is required" placeholder="Patient Phone"> 
                                       <div class="help-block"></div>
                                    </div>
						   </div>

                     <div class="form-group py-2">
								    
								    <div class="controls">
									    <input type="text" name="amount" id="amount" class="form-control bg-white" required="" data-validation-required-message="This field is required" placeholder="Paid Amount"> 
                                        <div class="help-block"></div>
                                    </div>
						   </div>

                 </div>
                      
          
					  </div>
						<div class="text-xs-center d-flex justify-content-center mt-5">
							<input type="submit" class="btn btn-rounded btn-lg btn-primary mb-5" value="Submit">
						</div>
					</form>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          </div>
         </div>
        </div>
       </div>
        
       

       


         <?php $__env->stopSection(); ?>
      

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/hospital/Appointment/appointment.blade.php ENDPATH**/ ?>