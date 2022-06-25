<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <a class="btn btn-success" href="#">Create</a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor Member</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = @members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <td><?php echo e($member->id); ?></td>
                    <td><?php echo e($member->nama); ?></td>
                    <td><?php echo e($member->alamat); ?>}</td>
                    <td> <?php echo e($member->no_telp); ?></td>
                    <td>Active</td>
                    <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                      <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                  </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <div class="alert alert-danger">
                    Data Member belum tersedia
                  </div>
                  <?php endif; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nomor Member</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
                <?php echo e($members->links()); ?>

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