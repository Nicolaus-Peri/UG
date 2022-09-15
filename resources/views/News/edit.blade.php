<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title col-10">Edit News</h3>
                <a class="btn btn-danger col-2" href="{{url('/news')}}"> Back</a>
              </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
                </div>
                @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('news.update', $news)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputTitle">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$news->title}}" placeholder="Masukkan Title">
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputDescription">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$news->description}}" placeholder="Masukkan Description">
                  </div>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputType">Type</label>
                    <input type="text" class="form-control" name="type" value="{{$news->type}}" placeholder="Masukkan Type">
                  </div>
                    @error('type')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="InputImage">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Masukkan Image">
                    <img src="/image/{{ $news->image }}" width="300px">
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