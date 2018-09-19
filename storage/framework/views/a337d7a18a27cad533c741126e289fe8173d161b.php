<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
       
        <button class="btn btn-success"><a href="<?php echo e(route('stock.create')); ?>">Add Item</a></button>
        
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Item</th>
        <th scope="col">Supplier</th>
        <th scope="col">Stock</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    ?>
    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo $no++ ?></th>
        <td><?php echo e($stock->item->name_items); ?></td>
        <td><?php echo e($stock->supplier->supplier_name); ?></td>
        <td><?php echo e($stock->stocks); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>