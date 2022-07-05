<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default col-6">
          <div class="card-header">
            <h3 class="card-title">Jadwal</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <form action="{{route('jadwal.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label>Day</label>
                  <div class="form-group">
                  <label>Date and time:</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                    @error('day')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Jenis Latihan</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="str_value">
                  @foreach($app as $app)
                    <option value="{{ $app->str_value }}">{{ $app->description }}</option>
                  @endforeach
                  </select>
                  @error('str_value')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                  <div class="form-group">
                  <label>Trainer</label>
                  <select class="form-control select2bs4" style="width: 100%;" id="nama">
                  @foreach($trainer as $trainer)
                    <option value="{{ $trainer->id }}">{{ $trainer->nama }}</option>
                  @endforeach
                  </select>
                  @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            </form>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
