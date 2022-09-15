<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Quick Example</h3>
                <a class="btn btn-danger col-2" href="{{url('/transaction')}}"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('transaction.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                <div class="form-group">
                    <label for="InputImage">Image :</label>
                    <input type="file" class="form-control" name="image" placeholder="Masukkan Image">
                  </div>
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
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