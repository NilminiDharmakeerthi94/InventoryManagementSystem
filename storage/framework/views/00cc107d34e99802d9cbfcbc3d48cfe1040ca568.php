<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body>
  <?php echo $__env->make('partials._alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?> 
    <!-- /page content -->
    
    <?php echo $__env->make('partials._script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
