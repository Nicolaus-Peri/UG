<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item col-10"><a class="nav-link" href="{{url('/transaction')}}" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="btn btn-danger" href="{{route('transaction.create')}}">Add Transaction</a></li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    @foreach ($transactions as $transaction)
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <p>{{ Auth::user()->nama }}</p>
                        </span>
                        <span class="description">{{ Auth::user()->email }}</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <img src="/image/{{ $transaction->image }}" width="200px">
                      </p>
                    </div>
                    @endforeach
                    <!-- /.post -->
                      </div>
                      <!-- /.row -->
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>