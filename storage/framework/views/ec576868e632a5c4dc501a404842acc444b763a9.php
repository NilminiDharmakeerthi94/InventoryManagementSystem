<?php $__env->startSection('content'); ?>
<?php if(count($results)): ?>
<div class="x_panel green white-text">Search Result : <b><?php echo e($query); ?></b></div>
    <div class="container">
		<div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Items</th>
                    <th scope="col">Category</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Units</th>
                    <th scope="col">Purchase</th>
                    <th scope="col">Sale</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                ?> 
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo e($result->name_items); ?></td>
                    <td><?php echo e($result->category->name); ?></td>
                    <td><?php echo e($result->descriptions); ?></td>
                    <td><?php echo e($result->units); ?></td>
                    <td><?php echo e($result->purchase_prices); ?></td>
                    <td><?php echo e($result->sale_prices); ?></td>
                    <td><img src="<?php echo e(asset('image/'.$result->image)); ?>" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                    <td>
                        <button class="btn btn-info"><a href="<?php echo e(route('item.edit', $result )); ?>">edit</a></button>
                        <form action="<?php echo e(route('item.destroy',$result)); ?>" method='post'class=''>
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-danger" type="submit">Delete</button>  
                    </form>
                    </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
                
		</div>
	</div>
	

</div>

<?php echo e($results->render()); ?>

	
<?php else: ?>
   <div class="card-panel red darken-3 white-text">Oops.. Data <b><?php echo e($query); ?></b> can't be deleted</div>
<?php endif; ?>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>