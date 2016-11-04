 <!-- This is our main page for the blogging site.  is used
to incorporate it into the other pages. It contains the heading in the _head partial file, it contains the _nav bar in the _nav partial file, same as message, footer and script.
 --> 
<!DOCTYPE html>
<html lang="en">
  <head>
      <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
  <body>
      <?php echo $__env->make('partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="container">

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     </div> <!-- end of container-->

      <?php echo $__env->make('partials._script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
