<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Create New Trainer</h3>
                <a class="btn btn-danger col-2" href="{{url('/trainer')}}"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('trainer.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputNo_Telp">No Telpon</label>
                    <input type="string" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telpon">
                  </div>
                    @error('no_telp')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputJenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
                  </div>
                    @error('jenis_kelamin')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                  </div>
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputDetail">Detail</label>
                    <input type="text" class="form-control" name="detail" placeholder="Masukkan Detail">
                  </div>
                    @error('detail')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputImage">Image :</label>
                    <input type="file" class="form-control" name="image" placeholder="Masukkan Image">
                  </div>
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>