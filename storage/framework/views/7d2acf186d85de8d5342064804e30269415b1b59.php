<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">DataTable with default features</h3>
                  <a class="btn btn-success col-2" href="<?php echo e(route('trainer.create')); ?>">Create</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                  <div class="alert alert-success">
                  <p><?php echo e($message); ?></p>
                  </div>
                  <?php endif; ?>
                  <table id="example1" class="table table-bordered table-striped">
                  <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Jenis Kelamin</th>
                  <th>Detail</th>
                  <th>Image</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td><?php echo e($trainers->perPage() * ($trainers->currentPage()-1) + $count); ?></td>
                  <td><?php echo e($trainer->nama); ?></td>
                  <td><?php echo e($trainer->no_telp); ?></td>
                  <td><?php echo e($trainer->jenis_kelamin); ?></td>
                  <td><?php echo e($trainer->detail); ?></td>
                  <td><img src="/image/<?php echo e($trainer->image); ?>" width="100px"></td>
                  <td>
                  <form action="<?php echo e(route('trainer.destroy',$trainer->id)); ?>" method="Post">
                  <a class="btn btn-primary" href="<?php echo e(route('trainer.edit', $trainer)); ?>">Edit</a>
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                  <?php echo $trainers->links(); ?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/PersonalTrainer/html.blade.php ENDPATH**/ ?>