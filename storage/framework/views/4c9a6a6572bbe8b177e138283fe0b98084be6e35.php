<?php $__env->startSection('title', '| About'); ?>
<?php $__env->startSection('active-button'); ?>
         <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li class="active"><a href="/about">About</a></li>
         <li><a href="/contact">Contact</a></li>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
        <div class="row"> 
              <div class="col-md-12">
               <h1>About Me</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin diam justo, scelerisque non felis porta, placerat vestibulum nisi. Vestibulum ac elementum massa.</p>
                <p>You  may reach me at <?php echo e($data['email']); ?></p>

            </div>
        </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>