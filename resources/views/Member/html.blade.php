<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title col-10">DataTable with default features</h3>
                  <a class="btn btn-success col-2" href="{{route('member.create')}}">Create</a>
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
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th width="280px">Action</th>
                  </tr>
                  <?php $count = 1; ?> 
                  @foreach ($members as $member )
                  <tr>
                  <td>{{ $members->perPage() * ($members->currentPage()-1) + $count }}</td>
                  <td>{{ $member->nama }}</td>
                  <td>{{ $member->alamat }}</td>
                  <td>{{ $member->no_telp }}</td>
                  <td>
                  <a class="btn btn-primary" href="{{route('member.edit', $member)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                  </tr>
                  <?php $count++; ?>
                  @endforeach
                  </table>
                  {!! $members->links() !!}
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
    