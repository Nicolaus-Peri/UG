<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($total_member_active); ?></h3>

                <p>Total Member Active</p>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($total_member_inactive); ?></h3>

                <p>Total Member Inactive</p>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($total_member_onsite); ?></h3>

                <p>Member Onsite</p>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e($total_visitor_onsite); ?></h3>

                <p>Visitor Onsite</p>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">
                  <i class="ion ion-clipboard mr-1"></i>
                  Visit
                </h3>
                <a href="<?php echo e(route('dashboard.create')); ?>" type="btn btn-primary">Add Visitor</a>
              </div>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telpon</th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($visit->id); ?></td>
                      <td><?php echo e($visit->nama); ?></td>
                      <td><?php echo e($visit->alamat); ?></td>
                      <td><?php echo e($visit->no_telp); ?></td>
                    </tr>
                  <?php echo csrf_field(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
              <!-- /.card-body -->
            </div>
                        <!-- BAR CHART -->
                        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Dashboard/html.blade.php ENDPATH**/ ?>