<?php $__env->startSection('js'); ?>
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
      }

    $("#inputimage").change(function (e) {
      // console.log(e);
      readURL(this);
    });

</script>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-md-8">
    <div class="x_panel">
      <div class="x_title">
       Send message
      </div>  
      <div class="x_content">
          <form action="<?php echo e(route('contact.branch')); ?>" class="" method="post" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>


                       <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Add Emai.." value="<?php echo e(old('email')); ?>"/>  
                        </div>

                        <div class="form-group has-feedback<?php echo e($errors->has('descriptions')? 'has-error':''); ?>">
                 <label for="">Descriptions</label>
                 <textarea name="descriptions" id="" class="form-control" cols="30" rows="5" placeholder="Add Descriptions" value=""><?php echo e(old('descriptions')); ?></textarea>
                 <?php if($errors->has('descriptions')): ?>
                 <span class="help-block">
                 <p><?php echo e($errors->first('descriptions')); ?></p>
                     </span>
                     <?php endif; ?>
                        </div>

          

        
          <div class="form-group">
            <input type="submit" value="Send" class="btn btn-primary">
          </div>
          
        </form>
      </div>
    </div>
  </div>
  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>