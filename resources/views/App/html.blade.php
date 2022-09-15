<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">Apps Table</h3>
                  <a class="btn btn-success col-2" href="{{route('app.create')}}">Create</a>
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
                  <th>Category</th>
                  <th>Type</th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  @foreach ($apps as $app )
                  <tr>
                  <td>{{ $apps->perPage() * ($apps->currentPage()-1) + $count }}</td>
                  <td>{{ $app->category }}</a></td>
                  <td>{{ $app->type }}</td>
                  <td>{{ $app->jenis }}</td>
                  <td>{{ $app->int_value }}</td>
                  <td>{{ $app->description }}</td>
                  <td><img src="/image/{{ $app->image }}" width="100px"></td>
                  <td>
                  <a class="btn btn-primary" href="{{route('app.edit', $app)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="sumbit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach
                  </table>
                  {!! $apps->links() !!}
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
    