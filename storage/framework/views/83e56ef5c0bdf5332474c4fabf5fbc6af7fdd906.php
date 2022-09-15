<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Profile</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <form action="<?php echo e(route('checkIn')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                    <?php if(session('error')): ?>
                      <div class="alert alert-danger">
                          <b>Opps!</b> <?php echo e(session('error')); ?>

                      </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                      <div class="alert alert-danger">
                          <b>Selamat!!</b> <?php echo e(session('success')); ?>

                      </div>
                    <?php endif; ?>
                      <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
                      <button type="submit" class="btn btn-primary">Check In</button>
                    </div>
                  </div>
                  </form>
                </div>
                <div class="col-12 col-sm-6">
                  <form action="<?php echo e(route('checkOut')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                      <button type="submit" class="btn btn-danger">Check Out</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Info Terbaru</h4>
                  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <a href="#"><?php echo e($news->title); ?></a>
                        </span>
                        <span class="description"><?php echo e($news->update_at); ?></span>
                      </div>
                      <!-- /.user-block -->
                      <img class="img-circle img-bordered-sm" src="/image/<?php echo e($news->image); ?>" alt="user image">
                      <p><?php echo e($news->description); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-user"></i> <?php echo e(Auth::user()->nama); ?></h3>
              <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Alamat
                  <b class="d-block"><?php echo e(Auth::user()->alamat); ?></b>
                </p>
                <p class="text-sm">Nomor Telpon
                  <b class="d-block"><?php echo e(Auth::user()->no_telp); ?></b>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Profile/html.blade.php ENDPATH**/ ?>