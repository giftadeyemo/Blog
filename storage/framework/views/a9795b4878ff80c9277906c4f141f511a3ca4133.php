<?php $__env->startSection('title', '| Home'); ?>

<?php $__env->startSection('active-button'); ?>
         <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
         <li><a href="/about">About</a></li>
         <li><a href="/contact">Contact</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <div class="row"> 
              <div class="col-md-12">
                <div class="jumbotron">
                  <h1> Welcome to my Blog!</h1>
                  <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                  <p><a class="btn btn-primary btn-lg" href="" role="button">Popular Post</a></p>

                </div>
            </div>
        </div> <!-- end of header row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <?php foreach($posts as $post): ?>
                  <div class="post">
                    <h3><?php echo e($post->title); ?></h3> 
                    <p><?php echo e(substr($post->body, 0, 10)); ?><?php echo e(strlen($post->body) > 10 ? "..." : ""); ?></p>
                    <a href="#" class="btn btn-primary"> Read More..</a>              
                  </div>
              <?php endforeach; ?>
            
            </div>
           

            <div class="col-md-3 col-md-offset-1">
              <h3>Side Bar</h3>
            </div>
        </div> 

      </div>
<?php $__env->stopSection(); ?>
                
               
        
            
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>