<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Quick Example</h3>
                <a class="btn btn-danger col-2" href="#"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('member.update', $member)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$member->nama}}" placeholder="Masukkan Nama">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputAlamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$member->alamat}}" placeholder="Masukkan Alamat">
                  </div>
                    @error('alamat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputNo_telp">No Telpon</label>
                    <input type="string" class="form-control" name="no_telp" value="{{$member->no_telp}}" placeholder="Masukkan Nomor Telpon">
                  </div>
                    @error('no_telp')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$member->email}}" placeholder="Masukkan Email">
                  </div>
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" name="password" value="{{$member->password}}" placeholder="Masukkan Password">
                  </div>
                    @error('password')
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