<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">Data Table Jadwal</h3>
                  <a class="btn btn-success col-2" href="<?php echo e(route('jadwal.create')); ?>">Create</a>
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
                  <th>Day</th>
                  <th>Jenis</th>
                  <th>Trainer</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td><?php echo e($jadwal->id); ?></td>
                  <td><?php echo e($jadwal->day); ?></a></td>
                  <td><?php echo e($jadwal->str_value); ?></td>
                  <td><?php echo e($jadwal->trainer); ?></td>
                  <td>
                    <form action="<?php echo e(route('jadwal.destroy',$jadwal->id)); ?>" method="POST">
                  <a class="btn btn-primary" href="<?php echo e(route('jadwal.edit', $jadwal)); ?>">Edit</a>
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="sumbit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
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
    <?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Jadwal/html.blade.php ENDPATH**/ ?>