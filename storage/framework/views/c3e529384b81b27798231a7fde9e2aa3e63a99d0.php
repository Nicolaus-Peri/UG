<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">DataTable with default features</h3>
                  <a class="btn btn-success col-2" href="<?php echo e(route('member.create')); ?>">Create</a>
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
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td><?php echo e($members->perPage() * ($members->currentPage()-1) + $count); ?></td>
                  <td><a href="<?php echo e(url('/dashboard')); ?>" class="nav-link"><?php echo e($member->nama); ?></a></td>
                  <td><?php echo e($member->alamat); ?></td>
                  <td><?php echo e($member->no_telp); ?></td>
                  <td>
                  <form action="<?php echo e(route('member.destroy',$member->id)); ?>" method="Post">
                  <a class="btn btn-primary" href="<?php echo e(route('member.edit', $member)); ?>">Edit</a>
                  <?php echo csrf_field(); ?>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                  <?php echo $members->links(); ?>

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
    <?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Member/html.blade.php ENDPATH**/ ?>