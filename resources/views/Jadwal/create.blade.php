<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default col-6">
          <div class="card-header">
            <h3 class="card-title"> Create Jadwal</h3>

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
          <div class="card-body">
          <form action="{{route('jadwal.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label>Day</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="day">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                  </select>
                    @error('day')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Jenis Latihan</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="jenis">
                  @foreach($app as $app)
                    <option value="{{ $app->jenis }}">{{ $app->description }}</option>
                  @endforeach
                  </select>
                  @error('jenis')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                  <div class="form-group">
                  <label>Trainer</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="trainer">
                  @foreach($trainer as $trainer)
                    <option value="{{ $trainer->nama }}">{{ $trainer->nama }}</option>
                  @endforeach
                  </select>
                  @error('trainer')
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