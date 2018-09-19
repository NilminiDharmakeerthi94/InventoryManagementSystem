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
        Add Data Item
      </div>  
      <div class="x_content">
          <form action="<?php echo e(route('item.store')); ?>" class="" method="post" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>


          <div class="form-group has-feedback<?php echo e($errors->has('name_items')? 'has-error':''); ?>">
            <label for="">Name Items</label>
            <input type="text" name="name_items" placeholder="Post title" class="form-control" value="<?php echo e(old('name_items')); ?>"/>
            <?php if($errors->has('name_items')): ?>
            <span class="help-block">
              <p><?php echo e($errors->first('name_items')); ?></p>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="">Category Item</label>
            <select name="category_id" id="" class="form-control">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
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

          <div class="form-group has-feedback<?php echo e($errors->has('units')? 'has-error':''); ?>">
            <label for="">Units</label>
            <input type="text" name="units" placeholder="Add units" class="form-control" value="<?php echo e(old('units')); ?>"/>
            <?php if($errors->has('units')): ?>
            <span class="help-block">
              <p><?php echo e($errors->first('units')); ?></p>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group has-feedback<?php echo e($errors->has('purchase_prices')? 'has-error':''); ?>">
            <label for="">Purchase Prices</label>
            <input type="text" name="purchase_prices" placeholder="Add purchase price" class="form-control" value="<?php echo e(old('purchase_prices')); ?>"/>
            <?php if($errors->has('purchase_prices')): ?>
            <span class="help-block">
              <p><?php echo e($errors->first('purchase_prices')); ?></p>
            </span>
            <?php endif; ?>
          </div>

          <div class="form-group has-feedback<?php echo e($errors->has('sale_prices')? 'has-error':''); ?>">
            <label for="">Sale Prices</label>
            <input type="text" name="sale_prices" placeholder="Add sale prices" class="form-control" value="<?php echo e(old('sale_prices')); ?>"/>
            <?php if($errors->has('sale_prices')): ?>
            <span class="help-block">
              <p><?php echo e($errors->first('sale_prices')); ?></p>
            </span>
            <?php endif; ?>
          </div>
         

          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
          
        </form>
      </div>
    </div>
  </div>
  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>