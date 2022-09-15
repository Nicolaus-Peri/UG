<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Edit Transaction</h3>
                <a class="btn btn-danger col-2" href="/transactionlist"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('transactionlist.update', $transaction->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputUserId">User Id</label>
                    <input type="text" class="form-control" name="user_id" value="{{$transaction->user_id}}" disabled>
                    @error('user_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputImage">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Masukkan Image" disabled>
                    <img src="/image/{{ $transaction->image }}" width="300px">
                  </div>
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Done</button>
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