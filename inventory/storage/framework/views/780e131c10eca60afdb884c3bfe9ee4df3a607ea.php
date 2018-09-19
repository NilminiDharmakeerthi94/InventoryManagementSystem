<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-8">
        <div class="x_panel">
            <div class="x_title">
                Checkout Stock
            </div>
            <div class="x_content">
                <div class="col-md-8">
                    <form action="<?php echo e(route('stock.out')); ?>" method=post enctype="multipart/form-data" >
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                        <label for="">Item Name</label>
                        <select name="item_id" id="" class="form-control">
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"> <?php echo e($item->name_items); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Supplier Name</label>
                        <select name="supplier_id" id="" class="form-control">
                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($supplier->id); ?>"> <?php echo e($supplier->supplier_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Stock Checkout</label>
                        <input type="text" name="checkout" id="stock" class="form-control" />  
                        </div>

                        <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>