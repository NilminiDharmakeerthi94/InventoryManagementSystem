<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="form-group pull-right">
            <div class="input-group">
                <form action="<?php echo e(route('supplier.search',$suppliers)); ?>" method="GET">
                    <input type="text" class="form-control" name="supplierkey" style="width:350px">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-medium btn-primary">Search</button>
                    </span> 
                </form>
            </div>
        </div>
        <button class="btn btn-success"><a href="<?php echo e(route('supplier.create')); ?>">Add Item</a></button>
        
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    ?>
    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo $no++ ?></th>
        <td><?php echo e($supplier->supplier_name); ?></td>
        <td><?php echo e($supplier->phone); ?></td>
        <td><?php echo e($supplier->email); ?></td>
        <td><?php echo e($supplier->address); ?></td>
        <td><?php echo e($supplier->city->city_name); ?></td>
       
        <td>
            <button class="btn btn btn-info"><a href="<?php echo e(route('supplier.edit', $supplier )); ?>">edit</a></button>
            <form action="<?php echo e(route('supplier.destroy',$supplier)); ?>" method='post'class=''>
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

            <button class="btn btn btn-danger" type="submit">Delete</button>  
            </form>
        </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>