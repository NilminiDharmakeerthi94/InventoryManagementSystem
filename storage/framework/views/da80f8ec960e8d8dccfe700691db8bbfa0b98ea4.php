<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <div class="form-group pull-right">
            <div class="input-group">
            <form action="<?php echo e(route('item.search')); ?>" method="GET">
                <input type="text" class="form-control" name="q" style="width:250px">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-medium btn-primary pull-right">Search</button>
                </span>
            </form>
            </div>
        </div>
        <button class="btn btn-success"><a href="<?php echo e(route('item.create')); ?>">Add Item</a></button>
        
        <table class="table table-bordered">
            <thead>
                <tr class="heading black">
                <th  scope="col">No</th>
                <th scope="col">Items</th>
                <th scope="col">Category</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Units</th>
                <th scope="col">Purchase</th>
                <th scope="col">Sale</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
    
            <!-- <?php if(is_array($items)||is_object($items)): ?> -->
            <?php
            $no = 1;
            ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo e($item->name_items); ?></td>
                <td><?php echo e($item->category->name); ?></td>
                <td><?php echo e($item->descriptions); ?></td>
                <td><?php echo e($item->units); ?></td>
                <td><?php echo e($item->purchase_prices); ?></td>
                <td><?php echo e($item->sale_prices); ?></td>
                <td>
                    <button class="btn btn-info"><a href="<?php echo e(route('item.edit', $item )); ?>">Edit</a></button>
                    <form action="<?php echo e(route('item.destroy',$item)); ?>" method='post'class=''>
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                  <button class="btn btn-danger" type="submit" >Delete</button>  
                  </form>
                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            </tbody>
        </table>
        <?php echo $items->render(); ?>

        <!-- <?php endif; ?> -->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>