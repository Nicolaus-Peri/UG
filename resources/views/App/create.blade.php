<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Add Apps</h3>
                <a class="btn btn-danger col-2" href="{{url('/app')}}"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('app.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputCategory">Category</label>
                    <input type="text" class="form-control" name="category" placeholder="Masukkan Category">
                    @error('category')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputType">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Masukkan Type">
                  </div>
                    @error('type')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputStr_value">Jenis</label>
                    <input type="string" class="form-control" name="jenis" placeholder="Masukkan Jenis">
                  </div>
                    @error('str_value')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputInt_value">Harga</label>
                    <input type="integer" class="form-control" name="int_value" placeholder="Masukkan Harga">
                  </div>
                    @error('int_value')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputDescription">Description</label>
                    <input type="string" class="form-control" name="description" placeholder="Masukkan Description">
                  </div>
                    @error('description')
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