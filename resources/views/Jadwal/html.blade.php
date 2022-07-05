<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">DataTable with default features</h3>
                  <a class="btn btn-success col-2" href="{{route('jadwal.create')}}">Create</a>
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
                  <th>Day</th>
                  <th>str_value</th>
                  <th>trainer</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  @foreach ($jadwal as $jadwal )
                  <tr>
                  <td>{{ $jadwal->id }}</td>
                  <td>{{ $jadwal->day }}</a></td>
                  <td>{{ $jadwal->str_value }}</td>
                  <td>{{ $jadwal->trainer }}</td>
                  <td>
                    <form action="{{route('jadwal.destroy',$jadwal->id)}}" method="POST">
                  <a class="btn btn-primary" href="{{route('jadwal.edit', $jadwal)}}">Edit</a>
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
    