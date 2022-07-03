<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">DataTable with default features</h3>
                  <a class="btn btn-success col-2" href="{{route('trainer.create')}}">Create</a>
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
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Jenis Kelamin</th>
                  <th>Detail</th>
                  <th>Image</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  @foreach ($trainers as $trainer )
                  <tr>
                  <td>{{ $trainers->perPage() * ($trainers->currentPage()-1) + $count }}</td>
                  <td>{{ $trainer->nama }}</td>
                  <td>{{ $trainer->no_telp }}</td>
                  <td>{{ $trainer->jenis_kelamin }}</td>
                  <td>{{ $trainer->detail }}</td>
                  <td><img src="/image/{{ $trainer->image }}" width="100px"></td>
                  <td>
                  <form action="{{ route('trainer.destroy',$trainer->id) }}" method="Post">
                  <a class="btn btn-primary" href="{{route('trainer.edit', $trainer)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach
                  </table>
                  {!! $trainers->links() !!}
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
    