<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>CRUD Operation Using Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Person's Data</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('person.create')); ?>"> Create Person Details</a>
                    </div>
                </div>
            </div>
        
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
                <table class="table table-bordered">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Hobby</th>
                        <th>Description</th>
                        <th width="280px">Action</th>
                    </tr>
            
            <?php $__currentLoopData = $person; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($person->id); ?></td>
                    <td><?php echo e($person->name); ?></td>
                    <td><?php echo e($person->dob); ?></td>
                    <td><?php echo e($person->age); ?></td>
                    <td><?php echo e($person->gender); ?></td>
                    <td><?php echo e($person->phoneNo); ?></td>
                    <td><?php echo e($person->email); ?></td>
                    <td><?php echo e($person->hobby); ?></td>
                    <td><?php echo e($person->description); ?></td>
                    <td>
                        <form action="<?php echo e(route('person.destroy',$person->id)); ?>" method="Post">
                            <a class="btn btn-primary" href="<?php echo e(route('person.edit',$person->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\crud-operation\resources\views/person/index.blade.php ENDPATH**/ ?>