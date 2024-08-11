

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My</title>
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/all.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-icons.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap-extensions.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
      <style>
        a{
            text-decoration: none;
        }
         section{
         padding-top: 115px;
         padding-bottom: 50px;
         } 
         .carousel-control-prev-icon, .carousel-control-next-icon {
         height: 50px;
         width: 50px;
         outline: #01275a;
         background-color: #01275a;
         background-size: 100%, 100%;
         border-radius: 10%;
         border: 1px solid black;
         }
         .nav-link:hover{
         background-color: #f7f723;
         transition: all linear 1s;
         border-radius: 10%;
         }
         .nav-Link button:hover{
         background-color: #b80101;
         transition: all linear 1s;
         }
      </style>
   </head>
   <body>
      <header>
         <!-- ============================ logo and menu part ================================ -->  
         <nav id="Main-nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="d-flex justify-content-center text-black bg-transparent" href="<?php echo e(route('index')); ?>"><h3 class="text-center text-primary fw-bold">Doctor Appointment</h3></a>
               <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                  <div class="offcanvas-header">
                     <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     <ul class="navbar-nav d-flex align-items-center justify-content-end flex-grow-1 pe-3 text-dark">
                    
                      
                        <li class="nav-item">
                        <a class="nav-Link text-white ms-2 fw-bold fs-5" href="<?php echo e(route('index')); ?>">Home</a>
                     </li>
                        <li class="nav-item">
                        <a class="nav-Link text-white ms-2 fw-bold fs-5" href="<?php echo e(route('doctor.view')); ?>">Doctor</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-Link text-white ms-2 fw-bold fs-5" href="<?php echo e(route('appointment.view')); ?>">Apppointment</a>
                  </li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>

      <!-- ============================== Banner part ========================= -->
<main>    
<section id="Banner" class="section-padding">
     <div class="container py-5">
       <div class="row py-5">
        <div class="col-6 border border-3 border-dark rounded-5">
           <div class="p-5">
             <h1 class="fw-bold" style="color:#c40202;">My Hospital</h1>

           </div>
         </div>
         <div class="col-6">
         </div>  
        </div>       
      </div>  
</section>    
</main>

<footer>  

</footer>    

</body>
    <script src="<?php echo e(asset('backend/js/bootstrap.bundle.min.js')); ?>"></script>
</html>
<?php /**PATH C:\xampp\htdocs\Smartsoftwarelaravel\Hospital\resources\views/index.blade.php ENDPATH**/ ?>