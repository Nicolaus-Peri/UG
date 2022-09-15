<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Create Data Member</h3>
                <a class="btn btn-danger col-2" href="{{url('/member')}}"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="InputAlamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                  </div>
                    @error('alamat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputNo_telp">No Telpon</label>
                    <input type="string" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telpon">
                  </div>
                    @error('no_telp')
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
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                  </div>
                    @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="isActive">Active</label> 
                    <input type="checkbox" class="form-control col-2" name="isActive" id="isActive" value="1">
                    <label for="isAdmin" for="isAdmin">Admin</label>
                    <input type="checkbox" class="form-control col-2" name="isAdmin" id="isAdmin" value="1">
                  </div>
                    
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