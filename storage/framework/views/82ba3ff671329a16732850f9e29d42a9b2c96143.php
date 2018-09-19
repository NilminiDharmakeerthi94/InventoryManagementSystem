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

    $("#inputimage").change(function () {
        readURL(this);
    });

</script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-md-8">
        <div class="x_panel">
            <div class="x_title">
                Add Supplier
            </div>
            <div class="x_content">
                <div class="col-md-8">
                    <form action="<?php echo e(route('supplier.store')); ?>" method=post enctype="multipart/form-data" >
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                        <label>Name Supplier</label>
                        <input type="text" name="supplier_name" class="form-control" placeholder="Add Supplier Name.." value="<?php echo e(old('supplier_name')); ?>"/>  
                        </div>

                        <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Add Phone Number.." value="<?php echo e(old('phone')); ?>"/>  
                        </div>

                        <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Add Emai.." value="<?php echo e(old('email')); ?>"/>  
                        </div>

                        <div class="form-group">
                        <label>Address</label>
                        <textarea col= 10 row=5 name="address" class="form-control"><?php echo e(old('address')); ?></textarea>
                        </div>

                        <div class="form-group">
                        <label for="">City</label>
                        <select name="city_id" id="" class="form-control">
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($city->id); ?>"> <?php echo e($city->city_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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