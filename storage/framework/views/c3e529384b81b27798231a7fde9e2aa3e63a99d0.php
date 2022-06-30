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
                  <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                  <td><?php echo e($member->id_member); ?></td>
                  <td><?php echo e($member->nama); ?></td>
                  <td><?php echo e($member->alamat); ?></td>
                  <td><?php echo e($member->no_telp); ?></td>
                  <td>
                  <a class="btn btn-primary" href="<?php echo e(route('member.edit', $member->id_member)); ?>">Edit</a>
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
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