<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">Data Table News</h3>
                  <a class="btn btn-success col-2" href="{{route('news.create')}}">Create</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                  <p>{{ $message }}</p>
                  </div>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                  <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  @foreach ($news as $news )
                  <tr>
                  <td>{{ $news->id }}</td>
                  <td>{{ $news->title }}</a></td>
                  <td>{{ $news->description }}</td>
                  <td><img src="/image/{{ $news->image }}" width="100px"></td>
                  <td>
                  <form action="{{ route('news.destroy',$news->id) }}" method="Post">
                  <a class="btn btn-primary" href="{{route('news.edit', $news)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="sumbit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach
                  </table>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    