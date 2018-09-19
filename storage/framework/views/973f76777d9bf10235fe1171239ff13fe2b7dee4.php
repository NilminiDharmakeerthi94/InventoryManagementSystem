<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-md-8">
    <div class="x_panel">
      <div class="x_title">
        Edit Item <?php echo e($item->id); ?>

      </div>
      <div class="x_content">
      <form action="<?php echo e(route('item.update',$item)); ?>" class="" method="post" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <?php echo e(method_field('PATCH')); ?>

          <div class="form-group">
            <label for="">Name Items</label>
            <input type="text" name="name_items" placeholder="Post title" class="form-control" value="<?php echo e($item->name_items); ?>"/>
          </div>

          <div class="form-group">
            <label for="">Category Item</label>
            <select name="category_id" id="" class="form-control">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"
                  <?php if($category->id === $item->category_id): ?>
                      selected
                  <?php endif; ?>
                > <?php echo e($category->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          
          <div class="form-group">
            <label for="">Descriptions</label>
            <textarea name="descriptions" id="" class="form-control" cols="30" rows="5" placeholder="Add Descriptions" ><?php echo e($item->descriptions); ?></textarea>
          </div>

          <div class="form-group">
            <label for="">Units</label>
            <input type="text" name="units" placeholder="Add units" class="form-control" value="<?php echo e($item->units); ?>"/>
          </div>

          <div class="form-group">
            <label for="">Purchase Prices</label>
            <input type="text" name="purchase_prices" placeholder="Add purchase price" class="form-control" value="<?php echo e($item->purchase_prices); ?>"/>
          </div>

          <div class="form-group has-feedback<?php echo e($errors->has('sale_prices')? 'has-error':''); ?>">
            <label for="">Sale Prices</label>
            <input type="text" name="sale_prices" placeholder="Add sale prices" class="form-control" value="<?php echo e($item->sale_prices); ?>"/>
          </div>

          <div class="form-group">
            <label>Photos</label>
            <input type="file" name="image" id="inputimage" class="form-control" value="<?php echo e(($item->image)); ?>"/>  
            </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
            <button type="submit" class="btn btn-info"><a href="<?php echo e(route('item.index')); ?>">Back</a></button>
          </div>
          
        </form>
        
      </div>
    </div>

  </div>
  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>